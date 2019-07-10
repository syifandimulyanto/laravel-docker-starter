<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request) {
        $limit = $request->limit ?: 10;
        return response()->json(Category::paginate($limit));
    }

    public function show(Category $category) {
        return $category;
    }

    public function store(Request $request) {
        $category = Category::create($request->all());
        return response()->json($category, 201);
    }

    public function update(Request $request, Category $category) {
        $category->update($request->all());
        return response()->json($category);
    }

    public function destroy(Category $category) {
        $category->delete();
        return response()->json(null, 204);
    }
}
