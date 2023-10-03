<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'description' => 'nullable|string',
            'img' => 'nullable|image',
        ]);
        if(isset($data['img'])){
            $data['img'] = 'storage/'.Storage::disk('public')->put('', $data['img']);
        }
        Category::create($data);
        return back()->with('success', 'Категория успешно создана!');
    }

    public function update(Category $category, Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'description' => 'nullable|string',
            'img' => 'nullable|image',
        ]);
        if(isset($data['img'])){
            $data['img'] = 'storage/'.Storage::disk('public')->put('', $data['img']);
        }
        $category->update($data);
        return back()->with('success', 'Категория успешно обновлена!');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return back()->with('success', 'Категория успешно удалена!');
    }
}
