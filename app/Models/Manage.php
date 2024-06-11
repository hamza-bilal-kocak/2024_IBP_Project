<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manage extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'price',
        'product_code',
        'description'
    ];
}
