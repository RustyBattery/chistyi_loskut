<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingsController extends Controller
{
    public function index()
    {
        return view('admin.settings.index');
    }

    public function update_price(Request $request){
        $data = $request->validate([
            'price' => 'required|file',
        ]);
        $file_path = Storage::disk('public')->put('', $data['price']);
        $env_path = base_path('.env');
        $env_file = file_get_contents($env_path);
        if (file_exists($env_path)) {
            file_put_contents($env_path, str_replace('PRICE_PATH='.env('PRICE_PATH'), 'PRICE_PATH='.$file_path, $env_file));
        }
        return back()->with('success', 'Прайс успешно обновлен!');
    }
}
