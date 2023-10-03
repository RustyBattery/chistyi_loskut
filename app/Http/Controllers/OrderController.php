<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderCreateRequest;
use App\Models\Order;

class OrderController extends Controller
{
    public function create(OrderCreateRequest $request){
        $data = $request->validated();
        Order::create($data);
        return back()->with('success', 'Заявка принята!');
    }
}
