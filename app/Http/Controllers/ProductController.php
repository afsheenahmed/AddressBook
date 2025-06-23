<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    //Product Upload Function
    public function create()
    {
        $categories = Category::select('id', 'CategoryName')->get();
        $vendors = Vendor::select('id', 'VendorName')
                        ->where('VendorStatus', 'Approved') // Only show active vendors
                        ->get();
        
        return view('Admin.uploadproducts', compact('categories', 'vendors'));
    }

    // public function store(Request $request)
    // {
    //     $validated = $request->validate([
    //         'ProductName' => 'required|string|max:255',
    //         'ProductDescription' => 'nullable|string',
    //         'ProductPrice' => 'required|numeric|min:0',
    //         'ProductStock' => 'required|integer|min:0',
    //         'ProductImage' => 'required|image|max:2048',
    //         'ProductCategory' => 'required|exists:categories,id',
    //         'ProductVendor' => 'required|exists:vendors,id',
    //         'ProductStatus' => 'required|in:Available,Out of Stock,Discontinued'
    //     ]);

    //     // Store image
    //     $imagePath = $request->file('ProductImage')->store('products', 'public');

    //     // Create product with vendor relationship
    //     Product::create([
    //         'ProductName' => $validated['ProductName'],
    //         'ProductDescription' => $validated['ProductDescription'],
    //         'ProductPrice' => $validated['ProductPrice'],
    //         'ProductStock' => $validated['ProductStock'],
    //         'ProductImage' => $imagePath,
    //         'ProductCategory' => $validated['ProductCategory'],
    //         'ProductVendor' => $validated['ProductVendor'],
    //         'ProductStatus' => $validated['ProductStatus']
    //     ]);

    //     return redirect()->route('Admin.uploadproducts')
    //                    ->with('success', 'Product created successfully!');
    // }
    
public function store(Request $request)
{
    $validated = $request->validate([
        'ProductName' => 'required|string|max:255',
        'ProductDescription' => 'nullable|string',
        'ProductPrice' => 'required|numeric|min:0',
        'ProductStock' => 'required|integer|min:0',
        'ProductImage' => 'required|image|max:2048',
        'ProductCategory' => 'required',
        'NewCategoryName' => 'required_if:ProductCategory,new_category|string|max:255|unique:categories,CategoryName',
        'ProductVendor' => 'required|exists:vendors,id',
        'ProductStatus' => 'required|in:Available,Out of Stock,Discontinued'
    ]);

    // Handle new category creation if needed
    $categoryId = $validated['ProductCategory'];
    if ($validated['ProductCategory'] === 'new_category') {
        $category = Category::create([
            'CategoryName' => $validated['NewCategoryName']
        ]);
        $categoryId = $category->id;
    }

    // Store image
    $imagePath = $request->file('ProductImage')->store('products', 'public');

    // Create product with vendor relationship
    Product::create([
        'ProductName' => $validated['ProductName'],
        'ProductDescription' => $validated['ProductDescription'],
        'ProductPrice' => $validated['ProductPrice'],
        'ProductStock' => $validated['ProductStock'],
        'ProductImage' => $imagePath,
        'ProductCategory' => $categoryId,
        'ProductVendor' => $validated['ProductVendor'],
        'ProductStatus' => $validated['ProductStatus']
    ]);

    return redirect()->route('Admin.uploadproducts')
                   ->with('success', 'Product created successfully!');
}

    /**
     * Display a Listing of Products.
     */
    public function index(Request $request)
    {
        // Start with all products and eager load relationships
        $query = Product::with(['category', 'vendor'])
            ->orderBy('created_at', 'desc');

        // Apply search filter
        if ($request->has('search')) {
            $query->where('ProductName', 'like', '%' . $request->search . '%')
                  ->orWhere('ProductDescription', 'like', '%' . $request->search . '%');
        }

        // Apply category filter
        if ($request->has('category') && $request->category != '') {
            $query->where('ProductCategory', $request->category);
        }

        // Apply status filter
        if ($request->has('status') && $request->status != '') {
            $query->where('ProductStatus', $request->status);
        }

        // Get paginated results (12 per page)
        $products = $query->paginate(12);

        // Get all categories for the filter dropdown
        $categories = Category::orderBy('CategoryName')->get();

        return view('Admin.viewproduct', [
            'products' => $products,
            'categories' => $categories
        ]);
    }


    public function indexx(Request $request)
    {
        // Start with all products and eager load relationships
        $query = Product::with(['category', 'vendor'])
            ->orderBy('created_at', 'desc');

        // Apply search filter
        if ($request->has('search')) {
            $query->where('ProductName', 'like', '%' . $request->search . '%')
                  ->orWhere('ProductDescription', 'like', '%' . $request->search . '%');
        }

        // Apply category filter
        if ($request->has('category') && $request->category != '') {
            $query->where('ProductCategory', $request->category);
        }

        // Apply status filter
        if ($request->has('status') && $request->status != '') {
            $query->where('ProductStatus', $request->status);
        }

        // Get paginated results (12 per page)
        $products = $query->paginate(12);

        // Get all categories for the filter dropdown
        $categories = Category::orderBy('CategoryName')->get();

        return view('User.productlayout', [
            'products' => $products,
            'categories' => $categories
        ]);
    }
    //Cosmetics Page Listing
public function categoryCProducts(Request $request)
{
    $cosmeticsCategory = Category::where('CategoryName', 'Cosmetics')->first();

    if (!$cosmeticsCategory) {
        abort(404, 'Cosmetics category not found');
    }

    $query = Product::with(['category', 'vendor'])
        ->where('ProductCategory', $cosmeticsCategory->id) // use ID
        ->orderBy('created_at', 'desc');

    if ($request->has('search')) {
        $query->where(function($q) use ($request) {
            $q->where('ProductName', 'like', '%' . $request->search . '%')
              ->orWhere('ProductDescription', 'like', '%' . $request->search . '%');
        });
    }

    $products = $query->paginate(12);
    $categories = Category::orderBy('CategoryName')->get();

    return view('User.productlayout', [
        'products' => $products,
        'categories' => $categories
    ]);
}
 //Jewellery Page Listing
public function categoryJProducts(Request $request)
{
    $jewelleryCategory = Category::where('CategoryName', 'Jewellery')->first();

    if (!$jewelleryCategory) {
        abort(404, 'Jewellery category not found');
    }

    $query = Product::with(['category', 'vendor'])
        ->where('ProductCategory', $jewelleryCategory->id)
        ->orderBy('created_at', 'desc');

    if ($request->has('search')) {
        $query->where(function($q) use ($request) {
            $q->where('ProductName', 'like', '%' . $request->search . '%')
              ->orWhere('ProductDescription', 'like', '%' . $request->search . '%');
        });
    }

    $products = $query->paginate(12);
    $categories = Category::orderBy('CategoryName')->get();

    return view('User.page', [
        'products' => $products,
        'categories' => $categories
    ]);
}


    /**
     * Show the form for creating a new product.
     */
    public function createe()
    {
        $categories = Category::orderBy('CategoryName')->get();
        $vendors = Vendor::where('VendorStatus', 'Active')
                        ->orderBy('VendorName')
                        ->get();

        return view('Admin.uploadproducts', compact('categories', 'vendors'));
    }

    /**
     * Store a newly created product in storage.
     */
    public function storee(Request $request)
    {
        $validated = $request->validate([
            'ProductName' => 'required|string|max:255',
            'ProductDescription' => 'nullable|string',
            'ProductPrice' => 'required|numeric|min:0',
            'ProductStock' => 'required|integer|min:0',
            'ProductImage' => 'required|image|max:2048',
            'ProductCategory' => 'required|exists:categories,id',
            'ProductVendor' => 'required|exists:vendors,id',
            'ProductStatus' => 'required|in:Available,Out of Stock,Discontinued'
        ]);

        try {
            // Store image
            $imagePath = $request->file('ProductImage')->store('products', 'public');

            // Create product
            Product::create([
                'ProductName' => $validated['ProductName'],
                'ProductDescription' => $validated['ProductDescription'],
                'ProductPrice' => $validated['ProductPrice'],
                'ProductStock' => $validated['ProductStock'],
                'ProductImage' => $imagePath,
                'ProductCategory' => $validated['ProductCategory'],
                'ProductVendor' => $validated['ProductVendor'],
                'ProductStatus' => $validated['ProductStatus']
            ]);

            return redirect()->route('Admin.viewproduct')
                           ->with('success', 'Product created successfully!');
        } catch (\Exception $e) {
            // Delete the uploaded image if product creation fails
            if (isset($imagePath)) {
                Storage::disk('public')->delete($imagePath);
            }
            
            return back()->withInput()
                        ->with('error', 'Error creating product: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified product.
     */
    public function show(Product $product)
    {
        return view('Admin.product-show', [
            'product' => $product->load(['category', 'vendor'])
        ]);
    }

    /**
     * Show the form for editing the specified product.
     */
    public function edit(Product $product)
    {
        $categories = Category::orderBy('CategoryName')->get();
        $vendors = Vendor::where('VendorStatus', 'Active')
                        ->orderBy('VendorName')
                        ->get();

        return view('Admin.product-edit', [
            'product' => $product,
            'categories' => $categories,
            'vendors' => $vendors
        ]);
    }

    /**
     * Update the specified product in storage.
     */
   // ProductController.php

  public function update(Request $request, Product $product)
{
    // Check if it's an AJAX request
    if ($request->ajax() || $request->wantsJson()) {
        $request->validate([
            'ProductName' => 'sometimes|string|max:255',
            'ProductPrice' => 'sometimes|numeric|min:0',
            'ProductStock' => 'sometimes|integer|min:0',
            'ProductStatus' => 'sometimes|in:Available,Out of Stock,Discontinued'
        ]);

        try {
            $product->update($request->only([
                'ProductName', 
                'ProductPrice', 
                'ProductStock', 
                'ProductStatus'
            ]));

            return response()->json([
                'success' => true,
                'product' => $product
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false, 
                'error' => $e->getMessage()
            ], 500);
        }
    }

    // Full form update (from edit form)
    $validated = $request->validate([
        'ProductName' => 'required|string|max:255',
        'ProductDescription' => 'nullable|string',
        'ProductPrice' => 'required|numeric|min:0',
        'ProductStock' => 'required|integer|min:0',
        'ProductImage' => 'sometimes|image|max:2048',
        'ProductCategory' => 'required|exists:categories,id',
        'ProductVendor' => 'required|exists:vendors,id',
        'ProductStatus' => 'required|in:Available,Out of Stock,Discontinued'
    ]);

    try {
        // Handle image update if a new image is provided
        if ($request->hasFile('ProductImage')) {
            $imagePath = $request->file('ProductImage')->store('products', 'public');
            Storage::disk('public')->delete($product->ProductImage);
            $validated['ProductImage'] = $imagePath;
        }

        $product->update($validated);

        return redirect()->route('Admin.viewproduct')
                         ->with('success', 'Product updated successfully!');
    } catch (\Exception $e) {
        return back()->withInput()
                     ->with('error', 'Error updating product: ' . $e->getMessage());
    }
}
    /**
     * Remove the specified product from storage.
     */
 public function destroy(Product $product)
{
    try {
        // Optional: Delete image from storage if needed
        if ($product->ProductImage) {
            Storage::disk('public')->delete($product->ProductImage);
        }

        $product->delete();

        return redirect()->route('Admin.viewproduct')
                         ->with('success', 'Product deleted successfully.');
    } catch (\Exception $e) {
        return back()->with('error', 'Error deleting product: ' . $e->getMessage());
    }
}


//Product Separator Function
public function shopJewel()
{
    // Get the "Jewelry" category ID (adjust this based on your actual category names/IDs)
    $jewelryCategory = Category::where('CategoryName', 'Jewelry')->first();
    
    if (!$jewelryCategory) {
        abort(404, 'Jewelry category not found');
    }

    $products = Product::with(['category', 'vendor'])
                 ->where('ProductCategory', $jewelryCategory->id)
                 ->where('ProductStatus', 'Available')
                 ->orderBy('created_at', 'desc')
                 ->paginate(12); // Using pagination instead of get()

    return view('shopjewel', [
        'products' => $products,
        'category' => $jewelryCategory
    ]);
}

// Add a new method for the other category
public function shopOtherProducts()
{
    // Get the "Other Products" category ID
    $otherCategory = Category::where('CategoryName', 'Other Products')->first();
    
    if (!$otherCategory) {
        abort(404, 'Other Products category not found');
    }

    $products = Product::with(['category', 'vendor'])
                 ->where('ProductCategory', $otherCategory->id)
                 ->where('ProductStatus', 'Available')
                 ->orderBy('created_at', 'desc')
                 ->paginate(12);

    return view('shopother', [
        'products' => $products,
        'category' => $otherCategory
    ]);
}


//Product Stock Update Function
    public function updateStock(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer'
        ]);

        try {
            DB::beginTransaction();

            $product = Product::lockForUpdate()->find($request->product_id);

            // For removing items from cart (quantity will be negative)
            if ($request->quantity < 0) {
                $product->ProductStock += abs($request->quantity);
            } else {
                // For adding items to cart
                if ($product->ProductStock < $request->quantity) {
                    return response()->json([
                        'success' => false,
                        'message' => 'Not enough stock available'
                    ], 400);
                }
                $product->ProductStock -= $request->quantity;
            }

            // Update status based on new stock
            if ($product->ProductStock <= 0) {
                $product->ProductStatus = 'Out of Stock';
            } else {
                $product->ProductStatus = 'Available';
            }
            
            $product->save();

            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Stock updated successfully',
                'remaining_stock' => $product->ProductStock
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'message' => 'Error updating stock: ' . $e->getMessage()
            ], 500);
        }
    }




}