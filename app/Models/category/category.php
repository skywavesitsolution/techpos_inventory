<?php

namespace App\Models\category;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class category extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'metadata',
    ];
}
