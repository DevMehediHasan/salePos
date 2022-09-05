<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductBatch extends Model
{
    protected $fillable = ["product_id", "batch_no", "expired_date", "qty"];
}
