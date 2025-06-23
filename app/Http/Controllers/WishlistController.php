<?php



// app/Http/Controllers/WishlistController.php
namespace App\Http\Controllers;

use App\Models\Wishlist;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function index()
    {
        if (!auth()->check()) {
            return redirect('/login')->with('error', 'Please login to view your wishlist');
        }

        $wishlistItems = Wishlist::with('product')
            ->where('user_id', auth()->id())
            ->get();

        return view('User.shop-wishlist', [
            'wishlistItems' => $wishlistItems
        ]);
    }

    public function add($productId)
    {
        if (!auth()->check()) {
            return response()->json([
                'success' => false,
                'message' => 'Please login to add items to wishlist'
            ], 401);
        }

        $product = Product::findOrFail($productId);

        // Check if already in wishlist
        $existing = Wishlist::where('user_id', auth()->id())
            ->where('product_id', $productId)
            ->first();

        if ($existing) {
            return response()->json([
                'success' => false,
                'message' => 'Product already in wishlist'
            ]);
        }

        Wishlist::create([
            'user_id' => auth()->id(),
            'product_id' => $productId
        ]);

        return response()->json([
            'success' => true,
            'wishlist_count' => Wishlist::where('user_id', auth()->id())->count(),
            'message' => 'Product added to wishlist'
        ]);
    }

    public function remove($id)
    {
        if (!auth()->check()) {
            return response()->json([
                'success' => false,
                'message' => 'Please login to modify wishlist'
            ], 401);
        }

        $wishlistItem = Wishlist::where('id', $id)
            ->where('user_id', auth()->id())
            ->firstOrFail();

        $wishlistItem->delete();

        return response()->json([
            'success' => true,
            'wishlist_count' => Wishlist::where('user_id', auth()->id())->count(),
            'message' => 'Product removed from wishlist'
        ]);
    }

    public function count()
    {
        if (!auth()->check()) {
            return response()->json(['count' => 0]);
        }

        return response()->json([
            'count' => Wishlist::where('user_id', auth()->id())->count()
        ]);
    }
    
}
