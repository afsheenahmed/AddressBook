<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //Category Show
    public function index()
{
    $categories = Category::all(); // Or whatever query you need
    return view('User.index', compact('categories'));
}
    public function store(Request $request)
    {
        $validated = $request->validate([
            'CategoryName' => 'required|string|max:255|unique:categories'
        ]);

        Category::create($validated);

        return back()->with('success', 'Category added successfully!');
    }
//Category Delete
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return back()->with('success', 'Category deleted successfully!');
    }
}