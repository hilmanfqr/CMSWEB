<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('auth.dashboard-categories', compact('categories'));
    }

    public function create()
    {
        return view('auth.categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        Category::create([
            'name' => $request->name,
        ]);
        return redirect()->route('categories.index')->with('alert-success', 'Category created successfully!');
    }

    public function edit(Category $category)
    {
        return view('auth.categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $category->update([
            'name' => $request->name,
        ]);
        return redirect()->route('categories.index')->with('alert-success', 'Category updated successfully!');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index')->with('alert-success', 'Category deleted successfully!');
    }
} 