<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Ourclass extends Model
{

    use HasFactory, SoftDeletes;
    protected $fillable = [

        'title',
        'image',
        'duration',
        'header_description',
        'description',
        'slug',
    ];


    public function image(): Attribute
    {
        return Attribute::make(
            get: fn(?string $value) => $value ? Storage::disk('public')->url($value) : null,
            set: fn($value) => $value ? $value->store('ourclass', 'public') : null,
        );
    }
    public function exercises(): HasMany
    {
        return $this->hasMany(Exercise::class);
    }
    public function  classSchedules(): HasMany
    {
        return $this->hasMany(ClassSchedule::class);
    }
}
