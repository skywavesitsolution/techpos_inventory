<?php

namespace App\Models\product;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class product extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'Code',
        'pro_name',
        'cat_id',
        'sub_catID',
        'sku',
        'cost_price',
        'retail_price',
    ];
}
