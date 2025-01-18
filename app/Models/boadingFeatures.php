<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class boadingFeatures extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function feature_items():HasMany
    {
        return $this->hasMany(features::class,'id','feature_id');
    }
}
