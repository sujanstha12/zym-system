<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ClassSchedule extends Model
{
    use HasFactory;
     protected $fillable=[

        'instructor_id',
        'ourclass_id',
        'time',
        'day',
    ];

     public function ourClass(): BelongsTo
       {
           return $this->belongsTo(Ourclass::class, 'ourclass_id');
       }
        public function instructor(): BelongsTo
       {
           return $this->belongsTo(Instructor::class, 'instructor_id');
       }
}
