<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category; // Add this line

class CategoryController extends Controller
{
    public function store(Request $request)
    {
        $category = new Category;
        $category->name = $request->name;
        $category->save();

        return response()->json($category, 201);
    }

    public function update(Request $request, Category $category)
    {
        $category->name = $request->name;
        $category->save();

        return response()->json($category, 200);
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return response()->json(null, 204);
    }
}