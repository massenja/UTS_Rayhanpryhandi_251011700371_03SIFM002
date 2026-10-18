<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Ecommerce extends Model
{
    protected $table = 'ecommerce';

    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'category',
    ];
}