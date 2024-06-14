<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SecurityFeature;

class SecurityFeatureController extends Controller
{

    public function index(){
        $security_features= SecurityFeature::paginate(10);

        return view('admin.security_feature.index', compact('security_features'));
    }

    public function create(){
        return view('admin.security_feature.create');
    }

    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'status'=>'required'
        ]);

        $security_feature=new SecurityFeature();
        $security_feature->name=$request->name;
        $security_feature->status=$request->status;
        $security_feature->save();

        toastr()->success('Security Feature Created Successfully');
        return redirect()->route('admin.security_feature.index');
    }
}
