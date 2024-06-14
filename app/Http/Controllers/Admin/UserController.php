<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('user_type', '=', 'user')->paginate(10);

        return view('admin.user.index', compact('users'));
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => '',
            'phone' => 'required',
            'password' => 'required|confirmed'
        ]);

        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->avatar = "";
        $user->password = Hash::make($request->password);

        $user->save();
        toastr()->success('User Created Successfully');
        return redirect()->route('admin.user.index');
    }
}
