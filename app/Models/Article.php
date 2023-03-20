<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function boot()
    {
        parent::boot();

        self::creating(function($article) {
            $article->user()->associate(auth()->user()->id);
            
        });
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }



}


