<?php

namespace App\Models\category;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class subcategory extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'cat_id',
        'metadata',
    ];
}
