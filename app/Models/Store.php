<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Store extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'phone_number',
        'logo',
        'slug',
        'location',
        'description',
        'is_active',
        'instragram_link',
        'telegram_link',
        'facebook_link',
        'google_map_link',
    ];
    
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
