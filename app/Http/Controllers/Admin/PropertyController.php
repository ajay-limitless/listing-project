<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Property;

class PropertyController extends Controller
{

    public function index(){
        $properties= Property::paginate(10);

        return view('admin.property.index', compact('properties'));
    }

    public function create(){
        return view('admin.property.create');
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'type' => 'required',
            'address' => 'required',
            'bedrooms' => 'required',
            'bathrooms' => 'required'
        ]);

        $property= new Property();
        $property->title = $request->title;
        $property->type = $request->type;
        $property->address = $request->address;
        $property->bedrooms = $request->bedrooms;
        $property->bathrooms = $request->bathrooms;
        $property->save();

        toastr()->success('staff Created Successfully');
        return redirect()->route('admin.property.index');
    }
}
