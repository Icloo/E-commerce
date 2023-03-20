<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function boot()
    {
        parent::boot();

        self::creating(function($cart) {
            $cart->user()->associate(auth()->user()->id);

            
        });

        
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}


