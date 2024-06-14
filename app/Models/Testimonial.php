<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $table='testimonials';

    protected $fillable = [
        'client_name',
        'location',
        'client_type',
        'property_type',
        'property_address',
        'transaction_date',
        'property_price_range',
        'client_experience',
        'agent_performance',
        'image',
        'rating',
        'permission_to_use',
        'attribution',
        'consent_to_share',
        'additional_comments',
    ];
}
