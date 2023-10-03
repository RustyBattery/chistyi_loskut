<?php

namespace App\Http\Controllers;

use App\Models\Category;

class PageController extends Controller
{
    public function main()
    {
        $categories = Category::all();
        return view('main', ['categories' => $categories]);
    }

    public function delivery()
    {
        return view('delivery');
    }

    public function contacts()
    {
        return view('contacts');
    }
}
