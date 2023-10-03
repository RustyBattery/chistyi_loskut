<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('catalog', ['categories' =>$categories]);
    }

    public function show(Category $category)
    {
        return view('products', ['category' => $category, 'products' => $category->products]);
    }
}
