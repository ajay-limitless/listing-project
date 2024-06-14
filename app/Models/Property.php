<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $table = 'properties';

    protected $fillable = [
        'title', 'description', 'type', 'category_id', 'status', 'price', 'agent_id', 'address', 'city',
        'state', 'zip_code', 'country', 'bedrooms', 'bathrooms', 'area', 'lot_size','parking', 'parking_spot',
        'garden', 'garage', 'features', 'amenities', 'security_features', 'security_type', 'service_charges',
        'year_built', 'floor', 'main_image', 'gallery_images', 'garage_size','user_id'
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'area' => 'decimal:2',
        'lot_size' => 'decimal:2',
        'features' => 'array',
        'gallery_images' => 'array',
    ];

    public function agent()
    {
        return $this->belongsTo(Agent::class);
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
