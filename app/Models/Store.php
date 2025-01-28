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
        'location',
        'description',
        'is_active',
        'instragram_link',
        'telegram_link',
        'facebook_link',
    ];
    
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
