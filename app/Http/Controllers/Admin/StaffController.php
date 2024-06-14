<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Staff;

class StaffController extends Controller
{

    public function index(){
        $staffs= Staff::paginate(10);

        return view('admin.staff.index', compact('staffs'));
    }

    public function create(){
        return view('admin.staff.create');
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

        $staff = new Staff();

        $staff->name = $request->name;
        $staff->email = $request->email;
        $staff->address = $request->address;
        $staff->phone = $request->phone;
        $staff->avatar = "";
        $staff->password = Hash::make($request->password);

        $staff->save();
        toastr()->success('staff Created Successfully');
        return redirect()->route('admin.staff.index');
    }
}
