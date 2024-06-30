<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
        // CategoryController.php
    public function index() {
        return view('templates.category');
    }

        public function show(Request $request)
    {
        if ($request->has('id')) {
            $categoryId = $request->query('id');
            $category = Category::findOrFail($categoryId);
            $products = $category->products;
            
            return view('templates.category', compact('category', 'products'));
        } else {
            return view('templates.products');
        }
    }
}
