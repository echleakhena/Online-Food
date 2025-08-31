<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food; 
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class FoodController extends Controller
{
    public function list()
    {
        $query = Food::with('category');
        if (request()->has('category') && request()->category != 'all') {
            $query->where('category_id', request()->category);
        }
        $categories = Category::all();
        $foods = $query->where('status', 'available')->orderBy('created_at', 'desc')->paginate(1); // Use paginate!
        return view('Backend.E-Food.Food.List', compact('foods', 'categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'costprice' => 'required|numeric',
            'unitprice' => 'required|numeric',
            'status' => 'required|in:available,unavailable',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $food = new Food();
        $food->category_id = $request->category_id;
        $food->name = $request->name;
        $food->costprice = $request->costprice;
        $food->unitprice = $request->unitprice;
        $food->description = $request->description;
        $food->status = $request->status;

        // Handle image upload
        if ($request->hasFile('image')) {
            $food->image = $request->file('image')->store('foods', 'public');
        }

        $food->save();

        return redirect()->route('food.list')->with('success', 'Food item added successfully.');
    }

    public function edit($id)
    {
        $food = Food::findOrFail($id);
        $categories = Category::all();
        return view('Backend.E-Food.Food.update', compact('food', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $food = Food::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'costprice' => 'required|numeric',
            'unitprice' => 'required|numeric',
            'status' => 'required|in:available,unavailable',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $food->category_id = $request->category_id;
        $food->name = $request->name;
        $food->costprice = $request->costprice;
        $food->unitprice = $request->unitprice;
        $food->description = $request->description;
        $food->status = $request->status;

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image
            if ($food->image) {
                Storage::disk('public')->delete($food->image);
            }
            $food->image = $request->file('image')->store('foods', 'public');
        }

        $food->save();

        return redirect()->route('food.list')->with('success', 'Food item updated successfully.');
    }

    public function destroy($id)
    {
        $food = Food::findOrFail($id);
        // Delete image
        if ($food->image) {
            Storage::disk('public')->delete($food->image);
        }
        $food = Food::where('id', $id)->update(['status' => 'unavailable']);
        return redirect()->route('food.list')->with('success', 'Food item deleted successfully.');
    }

}
