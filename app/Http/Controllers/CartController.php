<?php

namespace App\Http\Controllers;

use App\Models\AddToCart;
use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function showCart()
    {
        if (!auth()->check()) {
            return redirect('/login')->with('error', 'Please login to view your cart');
        }

        $cartItems = AddToCart::with('product')
                    ->where('UserId', auth()->id())
                    ->get();

        // Calculate totals
        $subtotal = $this->calculateSubtotal($cartItems);
        $shipping = $this->calculateShipping($subtotal);
        $total = $this->calculateCartTotal($subtotal, $shipping);

        return view('User.shop-cart', [
            'cartItems' => $cartItems,
            'subtotal' => $subtotal,
            'shipping' => $shipping,
            'total' => $total,
            'cartCount' => $cartItems->sum('Quantity')
        ]);
    }

    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'quantity' => 'required|integer|min:1|max:100'
            ]);

            $cartItem = AddToCart::with('product')
                        ->where('id', $id)
                        ->where('UserId', auth()->id())
                        ->firstOrFail();

            // Update quantity and recalculate total price
            $cartItem->Quantity = $request->quantity;
            $cartItem->TotalPrice = $cartItem->Quantity * $cartItem->product->ProductPrice;
            $cartItem->save();

            // Get updated cart items for accurate calculations
            $cartItems = AddToCart::with('product')
                        ->where('UserId', auth()->id())
                        ->get();

            $subtotal = $this->calculateSubtotal($cartItems);
            $shipping = $this->calculateShipping($subtotal);
            $total = $this->calculateCartTotal($subtotal, $shipping);

            return response()->json([
                'success' => true,
                'item' => [
                    'id' => $cartItem->id,
                    'TotalPrice' => $cartItem->TotalPrice
                ],
                'subtotal' => $subtotal,
                'shipping' => $shipping,
                'total' => $total,
                'cartCount' => $cartItems->sum('Quantity')
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error updating item: ' . $e->getMessage()
            ], 500);
        }
    }

    public function remove($id)
    {
        try {
            $cartItem = AddToCart::where('id', $id)
                        ->where('UserId', auth()->id())
                        ->firstOrFail();

            $cartItem->delete();

            // Get updated cart items after removal
            $cartItems = AddToCart::with('product')
                        ->where('UserId', auth()->id())
                        ->get();

            $subtotal = $this->calculateSubtotal($cartItems);
            $shipping = $this->calculateShipping($subtotal);
            $total = $this->calculateCartTotal($subtotal, $shipping);

            return response()->json([
                'success' => true,
                'subtotal' => $subtotal,
                'shipping' => $shipping,
                'total' => $total,
                'cartCount' => $cartItems->sum('Quantity')
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error removing item: ' . $e->getMessage()
            ], 500);
        }
    }

    public function clear()
    {
        try {
            AddToCart::where('UserId', auth()->id())->delete();
            
            return response()->json([
                'success' => true,
                'subtotal' => 0,
                'shipping' => 0,
                'total' => 0,
                'cartCount' => 0
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error clearing cart: ' . $e->getMessage()
            ], 500);
        }
    }

    public function addToCart(Request $request)
    {
        try {
            $request->validate([
                'product_id' => 'required|exists:products,id',
                'quantity' => 'required|integer|min:1|max:100'
            ]);

            $product = Product::findOrFail($request->product_id);

            $existingCart = AddToCart::where('UserId', auth()->id())
                            ->where('ProductId', $request->product_id)
                            ->first();

            if ($existingCart) {
                $existingCart->Quantity += $request->quantity;
                $existingCart->TotalPrice = $existingCart->Quantity * $product->ProductPrice;
                $existingCart->save();
            } else {
                AddToCart::create([
                    'ProductId' => $request->product_id,
                    'UserId' => auth()->id(),
                    'Quantity' => $request->quantity,
                    'TotalPrice' => $product->ProductPrice * $request->quantity
                ]);
            }

            // Get updated cart items
            $cartItems = AddToCart::with('product')
                        ->where('UserId', auth()->id())
                        ->get();

            $subtotal = $this->calculateSubtotal($cartItems);
            $shipping = $this->calculateShipping($subtotal);
            $total = $this->calculateCartTotal($subtotal, $shipping);

            return response()->json([
                'success' => true,
                'cart_count' => $cartItems->sum('Quantity'),
                'message' => 'Product added to cart',
                'subtotal' => $subtotal,
                'shipping' => $shipping,
                'total' => $total
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error adding to cart: ' . $e->getMessage()
            ], 500);
        }
    }

    private function calculateSubtotal($cartItems)
    {
        return $cartItems->sum(function($item) {
            return $item->Quantity * $item->product->ProductPrice;
        });
    }

    private function calculateShipping($subtotal)
    {
        // 5% of subtotal as shipping cost
        return $subtotal * 0.05;
    }

    private function calculateCartTotal($subtotal, $shipping)
    {
        return $subtotal + $shipping;
    }
    

    // Add this to your CartController
public function addFromWishlist(Request $request)
{
    try {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'wishlist_id' => 'nullable|exists:wishlists,id'
        ]);

        $product = Product::findOrFail($request->product_id);

        // Check product availability
        if ($product->ProductStatus !== 'Available') {
            return response()->json([
                'success' => false,
                'message' => 'This product is currently unavailable'
            ]);
        }

        // Add to cart logic (using your existing structure)
        $existingCart = AddToCart::where('UserId', auth()->id())
                        ->where('ProductId', $request->product_id)
                        ->first();

        if ($existingCart) {
            $existingCart->Quantity += 1;
            $existingCart->TotalPrice = $existingCart->Quantity * $product->ProductPrice;
            $existingCart->save();
        } else {
            AddToCart::create([
                'ProductId' => $request->product_id,
                'UserId' => auth()->id(),
                'Quantity' => 1,
                'TotalPrice' => $product->ProductPrice
            ]);
        }

        $response = [
            'success' => true,
            'cart_count' => AddToCart::where('UserId', auth()->id())->sum('Quantity'),
            'message' => 'Product added to cart from wishlist'
        ];

        // Optional: Remove from wishlist
        if ($request->wishlist_id) {
            Wishlist::where('id', $request->wishlist_id)
                  ->where('user_id', auth()->id())
                  ->delete();
            
            $response['wishlist_count'] = Wishlist::where('user_id', auth()->id())->count();
            $response['removed_from_wishlist'] = true;
        }

        return response()->json($response);

    } catch (\Exception $e) {
        return response()->json([
            'success' => false,
            'message' => 'Error: ' . $e->getMessage()
        ], 500);
    }
}
}