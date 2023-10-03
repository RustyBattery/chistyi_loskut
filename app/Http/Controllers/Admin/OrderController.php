<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $data = $request->validate([
            'status' => 'nullable|string',
        ]);

        if (isset($data['status'])) {
            $orders = Order::orderBy('created_at')->where('status', $data['status'])->paginate(10);
        } else {
            $orders = Order::orderBy('created_at')->paginate(10);
        }

        return view('admin.orders.index', ['orders' => $orders, 'status' => $data['status'] ?? null]);
    }

    public function update(Order $order, Request $request)
    {
        $data = $request->validate([
            'comment' => 'nullable|string',
            'status' => 'required|in:new,in_process,done',
        ]);
        $order->update($data);
        return back()->with('success', 'Заявка успешно обновлена!');
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return back()->with('success', 'Заявка успешно удалена!');
    }
}
