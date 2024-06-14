<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FarmFeature;

class FarmFeatureController extends Controller
{
    public function index(){
        $farm_feature= FarmFeature::paginate(10);

        return view('admin.farm_feature.index', compact('farm_feature'));
    }


    public function create(){
        return view('admin.farm_feature.create');
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'type' => 'required',
            'address' => 'required',
            'bedrooms' => 'required',
            'bathrooms' => 'required'
        ]);

        $farm_feature= new FarmFeature();
        $farm_feature->title = $request->title;
        $farm_feature->type = $request->type;
        $farm_feature->address = $request->address;
        $farm_feature->bedrooms = $request->bedrooms;
        $farm_feature->bathrooms = $request->bathrooms;
        $farm_feature->save();

        toastr()->success('staff Created Successfully');
        return redirect()->route('admin.farm_feature.index');
    }
}

