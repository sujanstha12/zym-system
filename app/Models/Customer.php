<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Storage;

class Customer extends Authenticatable
{
    use HasFactory, Notifiable;



    protected $fillable = [
        'name',
        'email',
        'password',
        'image'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $casts = [
        'password' => 'hashed',
    ];
     public function image():Attribute
       {
           return Attribute::make(
               get: fn(?string $value) => $value ? Storage::disk('public')->url($value) : null,
               set: fn($value) => $value ? $value->store('customer','public') : null,
           );

       }
}
