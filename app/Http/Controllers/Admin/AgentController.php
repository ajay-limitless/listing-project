<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Agent;
use Illuminate\Support\Facades\Hash;

class AgentController extends Controller
{
    public function index()
    {
        $agents = Agent::paginate(10);

        return view('admin.agent.index', compact('agents'));
    }

    public function create()
    {
        return view('admin.agent.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
          'total_leases'=>'required',
          'role'=>'required',
          'total_sales'=>'required',
          
        ]);

        $agent = new Agent();

        $agent->first_name = $request->first_name;
        $agent->last_name = $request->last_name;
        $agent->email = $request->email;
        $agent->address = $request->address;
        $agent->phone = $request->phone;
        $agent->profile_picture = "";
        $agent->bio = $request->bio;
        $agent->status = $request->status? 1 :0 ;
        $agent->role = $request->role;
        $agent->department = $request->department;
        $agent->hire_date = $request->hire_date;
        $agent->permissions = $request->permissions;
        $agent->total_sales = $request->total_sales;
        $agent->total_properties_sold = $request->total_properties_sold;
        $agent->total_leases = $request->total_leases;
        $agent->commission_rate = $request->commission_rate;
        $agent->average_rating = $request->average_rating;
        $agent->city = $request->city;
        $agent->state = $request->state;
        $agent->zip_code = $request->zip_code;
        $agent->employee_id  = $request->employee_id;
        $agent->emergency_contact_name = $request->emergency_contact_name;
        $agent->emergency_contact_phone = $request->emergency_contact_phone;
        $agent->emergency_contact_relationship = $request->emergency_contact_relationship;



        $agent->save();
        toastr()->success('Agent Created Successfully');
        return redirect()->route('admin.agent.index',compact('agent'));
    }



public function edit($id){

    $agents=Agent::findOrFail($id);
    return view("admin.agent.edit",compact('agents'));

}
    public function delete(Request $request)
    {
        $request->validate(['id' => 'required']);

        $agent = Agent::where('id', $request->id)->first();
        if ($agent != null) {
            $agent->delete();
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
