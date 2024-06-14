<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{

    public function index(){
        $categories= category::paginate(10);

        return view('admin.category.index', compact('categories'));
    }

    public function create(){
        return view('admin.category.create');
    }

    public function store(Request $request){
        $request-> validate([
            'name'=> 'required',
            'description'=> 'required',
            'slug'=> 'required',
            'status'=> 'required',
            'parent_id'=> 'required'
        ]);

        $category = new Category();
        $category->name=$request->name;
        $category->description=$request->description;
        $category->slug=$request->slug;
        $category->status=$request->status;
        $category->parent_id=$request->parent_id;
        $category->save();

        toastr()->success('Category created successfully');
        return redirect()->route('admin.category.index');
    }
}
