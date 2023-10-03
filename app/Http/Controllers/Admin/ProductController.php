<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index(Category $category)
    {
        return view('admin.category.show', ['category' => $category, 'products' => $category->products, 'categories' => Category::all()]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'description' => 'nullable|string',
            'img' => 'nullable|image',
            'category_id' => 'required|exists:categories,id',
            'price' => 'required|numeric',
            'unit' => 'nullable|string',
        ]);
        if(isset($data['img'])){
            $data['img'] = 'storage/'.Storage::disk('public')->put('', $data['img']);
        }
        $data['price'] = (int)($data['price']*100);

        if(!$data['unit']){
            unset($data['unit']);
        }

        Product::create($data);
        return back()->with('success', 'Товар успешно создан!');
    }

    public function update(Product $product, Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'description' => 'nullable|string',
            'img' => 'nullable|image',
            'category_id' => 'required|exists:categories,id',
            'price' => 'required|numeric',
            'unit' => 'required|string',
        ]);
        if(isset($data['img'])){
            $data['img'] = 'storage/'.Storage::disk('public')->put('', $data['img']);
        }
        $data['price'] = (int)($data['price']*100);

        $product->update($data);
        return back()->with('success', 'Товар успешно обновлен!');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return back()->with('success', 'Товар успешно удален!');
    }
}
