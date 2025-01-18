<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class user_details extends Model
{
    protected $user_details = 'user_details';

    protected $fillable = ['address', 'phone_number', 'whatsapp_number', 'facebook', 'short_desc', 'user_id'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id','id');
    }
}
