<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class boadings extends Model
{
    protected $guarded = [];

    public function features():HasMany
    {
        return $this->hasMany(boadingFeatures::class,'boading_id','id');
    }

    public function images():HasMany
    {
        return $this->hasMany(boadingImages::class,'boading_id','id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'added_by', 'id');
    }

    public function user_details(): BelongsTo
    {
        return $this->belongsTo(user_details::class, 'added_by', 'user_id');
    }

}
