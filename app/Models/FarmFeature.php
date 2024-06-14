<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FarmFeature extends Model
{
    use HasFactory;

    protected $table = 'farm_features';

    protected $fillable = [
        'name',
        'status'
    ];
}
