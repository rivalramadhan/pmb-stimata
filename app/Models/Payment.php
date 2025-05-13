<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'fullname',
        'amount',
        'status',
        'notes',
        'image_path',
        
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
