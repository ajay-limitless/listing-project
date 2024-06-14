<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\banner;

class BannerController extends Controller
{

    public function index(){
        $banners= Banner::paginate(10);

        return view('admin.banner.index', compact('banners'));
    }

    public function create(){
        return view('admin.banner.create');
    }

    public function store(Request $request){
        $request-> validate([
            'name'=> 'required',
            'status'=> 'required',
        ]);

        $banner = new Banner();
        $banner->name=$request->name;
        $banner->status=$request->status;
        $banner->save();

        toastr()->success('banner created successfully');
        return redirect()->route('admin.banner.index');
    }
}
