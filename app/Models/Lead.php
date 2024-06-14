<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;

    protected $table = 'leads';

    protected $fillable = [
        'name', 'email', 'phone', 'preferred_contact_method',
        'property_type', 'location', 'budget_min', 'budget_max', 'bedrooms', 'bathrooms',
        'source', 'campaign', 'status', 'priority', 'notes', 'next_followup_date', 'assigned_to','lead_type'
    ];

    protected $casts = [
        'budget_min' => 'decimal:2',
        'budget_max' => 'decimal:2',
        'next_followup_date' => 'date',
    ];

    /**
     * Get the staff member assigned to the lead.
     */
     public function assignedTo()
    {
        return $this->belongsTo(Staff::class, 'assigned_to');
    }
}
