<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function list(){
        $categories = Category::where('status', 'available')->paginate(5);
        return view('Backend.E-Food.Category.List', compact('categories'));
    }

    public function store(Request $request)
    {
        // Validate the incoming data
        $request->validate([
            'categoryName' => 'required|string|max:255',
            'categoryDescription' => 'required|string',
            'categoryStatus' => 'required|in:available,unavailable',
        ]);

        // Create the new category
        $category = Category::insert([
            'name' => $request->categoryName,
            'description' => $request->categoryDescription,
            'status' => $request->categoryStatus,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Return a response
        return response()->json(['success' => true, 'message' => 'Category added successfully']);
    }

    public function edit($id)
    {
        $category = Category::find($id);

        if (!$category) {
            return redirect()->route('category.list')->with('error', 'Category not found.');
        }

        return view('Backend.E-Food.Category.update', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'categoryName' => 'required|string|max:255',
            'categoryDescription' => 'nullable|string',
            'categoryStatus' => 'required|in:available,unavailable',  // Ensure valid status
        ]);

        $category = Category::find($id);

        // Update the category data
        $category->name = $request->categoryName;
        $category->description = $request->categoryDescription;
        $category->status = $request->categoryStatus;
        $category->updated_at = now();
        $category->save();
        return redirect()->route('category.list')->with('success', 'Category updated successfully.');
    }

    public function delete($id){
        $category = Category::find($id);

        if (!$category) {
            return redirect()->route('category.list')->with('error', 'Category not found.');
        }

        $category=Category::where('id', $id)->update(['status' => 'unavailable']);
        return redirect()->route('category.list')->with('success', 'Category deleted successfully.');
    }

}
