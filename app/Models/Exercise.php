<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Exercise extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable=[

        'title',
        'image',
        'sets',
        'time',
        'ourclass_id',
    ];


     public function image():Attribute
       {
           return Attribute::make(
               get: fn(?string $value) => $value ? Storage::disk('public')->url($value) : null,
               set: fn($value) => $value ? $value->store('exercise','public') : null,
           );

       }

       public function ourClass(): BelongsTo
       {
           return $this->belongsTo(Ourclass::class, 'ourclass_id');
       }
}
