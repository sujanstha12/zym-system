<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sale extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable=[

        'customer_id',
        'product_id',
        'purchased_quantity'


    ];


    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
    public function getProductPriceAttribute()
    {
        return $this->product->prize;
    }

    public function getTotalAmountsAttribute()
    {
        return $this->purchased_quantity * $this->product->prize;
    }


}
