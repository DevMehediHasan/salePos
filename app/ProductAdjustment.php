<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductAdjustment extends Model
{
    protected $table = 'product_adjustments';
    protected $fillable =[
        "adjustment_id", "product_id", "variant_id", "qty", "action"
    ];
}
