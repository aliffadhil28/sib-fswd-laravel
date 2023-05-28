<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
        'name',
        'name',
        'categories_id',
        'description',
        'price',
        'img',
        'condition_scale',
        'qty',
        'year',
        'status',
        'created_by',
        'verified_by',
        // 'created_by',
    ];

    // protected $table = 'products';
    use HasFactory;
}
