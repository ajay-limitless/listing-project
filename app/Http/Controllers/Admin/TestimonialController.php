<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    public function index(){
        $testimonials= Testimonial::paginate(3);

        return view('admin.testimonial.index', compact('testimonials'));
    }
    public function create()
    {
        return view('admin.testimonial.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'client_name' => 'required',
            'location' => 'required',
            'client_type' => 'required',
            'property_type' => 'required',
            'property_address' => 'required',
            'transaction_date' => 'required',
            'property_price_range' => 'required',
            'client_experience' => 'required',
            'agent_performance' => 'required',
            'permission_to_use' => 'required',
            'attribution' => 'required',
            'consent_to_share' => 'required',
            'additional_comments' => 'required',
            'image' => 'required',
            'rating' => 'required',
        ]);

        $testimonial = new Testimonial();

        $testimonial->client_name = $request->client_name;
        $testimonial->location = $request->location;
        $testimonial->client_type = $request->client_type;
        $testimonial->property_type = $request->property_type;
        $testimonial->property_address = $request->property_address;
        $testimonial->transaction_date = $request->transaction_date;
        $testimonial->property_price_range = $request->property_price_range;
        $testimonial->client_experience = $request->client_experience;
        $testimonial->agent_performance = $request->agent_performance;
        $testimonial->permission_to_use = $request->permission_to_use;
        $testimonial->attribution = $request->attribution;
        $testimonial->consent_to_share = $request->consent_to_share;
        $testimonial->additional_comments = $request->additional_comments;
        $testimonial->image = $request->image;
        $testimonial->rating = $request->rating;

        $testimonial->save();
        toastr()->success('Testimonial Created Successfully');
        return redirect()->route('admin.testimonial.index');
    }
}
