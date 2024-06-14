<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;


    protected $table = 'agents';

    protected $fillable = [
        'first_name', 'last_name', 'email', 'phone', 'profile_picture', 'bio', 'social_links',
        'employee_id', 'role', 'department', 'hire_date', 'status', 'is_admin', 'permissions',
        'office_location', 'total_sales', 'total_properties_sold', 'total_leases', 'commission_rate',
        'average_rating', 'address', 'city', 'state', 'zip_code', 'emergency_contact_name',
        'emergency_contact_phone', 'emergency_contact_relationship', 'last_login'
    ];

    protected $casts = [
        'social_links' => 'array',
        'permissions' => 'array',
        'total_sales' => 'decimal:2',
        'commission_rate' => 'decimal:2',
        'average_rating' => 'decimal:2',
        'hire_date' => 'date',
    ];
}
