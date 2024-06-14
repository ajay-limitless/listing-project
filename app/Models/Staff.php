<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;


    protected $table = 'staff';

    protected $fillable = [
        'first_name', 'last_name', 'email', 'password', 'phone', 'address', 'city', 'state', 'zip_code',
        'role', 'department', 'employee_id', 'hire_date', 'status', 'salary', 'commission_rate',
        'last_login', 'is_active', 'remember_token', 'profile_picture', 'bio', 'social_links',
        'is_admin', 'permissions', 'notes', 'emergency_contact_name', 'emergency_contact_phone',
        'emergency_contact_relationship'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'social_links' => 'array',
        'permissions' => 'array',
        'last_login' => 'datetime',
        'hire_date' => 'date',
    ];

}
