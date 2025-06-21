<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Instructor extends Model
{
    use HasFactory;
    protected $fillable=[

        'name',
        'image',
        'post',
        'contact_number',
        'facebook_url',
        'twitter_url',
        'biography',
        'achievement',
        'address',
        'email',
     ];

       public function image():Attribute
       {
           return Attribute::make(
               get: fn(?string $value) => $value ? Storage::disk('public')->url($value) : null,
               set: fn($value) => $value ? $value->store('instructor','public') : null,
           );

       }

}
