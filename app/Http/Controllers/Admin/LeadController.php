<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lead;
class LeadController extends Controller
{
    public function index(){
        $leads= Lead::paginate(10);

        return view('admin.leads.index', compact('leads'));
    }


    public function create(){
        return view('admin.leads.create');
    }

    public function store(Request $request){

        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'property_type' => 'required',
          'phone'=>'required',
            'bedrooms' => 'required',
            'bathrooms' => 'required',
           
        ]);

        $lead= new Lead();
        $lead->name = $request->name;
   
        $lead->email = $request->email;
        $lead->bedrooms = $request->bedrooms;
        $lead->bathrooms = $request->bathrooms;
        $lead->source = $request->source;
        $lead->priority = $request->priority;
        $lead->property_type = $request->property_type;
        $lead->status = $request->status? 1 : 0;
        $lead->lead_type = $request->lead_type;
     
   
        $lead->notes = $request->notes;
        $lead->phone = $request->phone;
        $lead->save();

        toastr()->success('leads create Successfully');
        return redirect()->route('admin.lead.index');
    }


    // edit function
    public function edit($id){

    $leads=Lead::findOrFail($id);

    if (!$leads) {
        toastr()->error('messages.food_not_found');
    }
        return view('admin.leads.edit',compact('leads'));
    }



    ///updateing
    public function update(Request $request ,$id){
          $lead=Lead::findOrFail($id);
     $lead->name = $request->name;
   
$lead->email = $request->email;
$lead->bedrooms = $request->bedrooms;
$lead->bathrooms = $request->bathrooms;
$lead->source = $request->source;
$lead->priority = $request->priority;
$lead->property_type = $request->property_type;
$lead->status = $request->status? 1 : 0;
$lead->lead_type = $request->lead_type;


$lead->notes = $request->notes;
$lead->phone = $request->phone;
$lead->save();

toastr()->success('update Successfully');
return redirect()->route('admin.lead.index');

    }

    public function destroy(  $id){
        $lead=Lead::find($id);
    
        $lead->delete();
    
        return back()->withSuccess('delete successfully');
    }

    }

  


