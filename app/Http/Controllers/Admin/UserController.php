<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $data = $request->validate([
            'role' => 'nullable|string',
        ]);

        if (isset($data['role'])) {
            if($data['role'] == 'admin'){
                $users = User::where('is_admin', true)->paginate(10);
            } else {
                $users = User::where('is_admin', false)->paginate(10);
            }
        } else {
            $users = User::paginate(10);
        }

        return view('admin.users.index', ['users' => $users, 'role' => $data['role'] ?? null]);
    }

    public function update(User $user, Request $request)
    {
        $data = $request->validate([
            'is_admin' => 'required|boolean',
        ]);

        $user->update($data);
        return back()->with('success', 'Пользователь успешно обновлен!');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return back()->with('success', 'Пользователь успешно удален!');
    }
}
