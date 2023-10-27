<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class PriceController extends Controller
{
    public function index()
    {
        return view('price');
    }

    public function get_file()
    {
        return Storage::disk('public')->download(env('PRICE_PATH'), 'price.'. explode('.', env('PRICE_PATH'))[1]);
    }
}
