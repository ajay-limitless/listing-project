<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Amenity;

class AmenityController extends Controller
{
    public function index(){
        $amenities= Amenity::paginate(10);

        return view('admin.amenity.index', compact('amenities'));
    }

    public function create(){
        return view('admin.amenity.create');
    }

    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'status'=>'required'
        ]);

        $amenity= new Amenity();
        $amenity->name=$request->name;
        $amenity->status=$request->status;
        $amenity->save();

        toastr()->success('Amenity Created Successfully');
        return redirect()->route('admin.amenity.index');
    }
    public function delete(Request $request)
    {
        $request->validate(['id' => 'required']);
        $amenities = Amenity::where('id', $request->id)->first();
        if ($amenities != null) {
            $amenities->delete();
            return response()->json([
                'status' => 'true',
                'message' => 'Deleted Successfully',
            ], 200);
        } else {
            return response()->json([
                'status' => 'false',
                'message' => 'Data not found',
            ], 404);
        }
    }
}
