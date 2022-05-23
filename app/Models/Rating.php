<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    public $timestamp = false;
    protected $fillable = [
        'id', 'product_id', 'rating'
    ];
    protected $primaryKey = 'id';
    protected $table = 'rating';
}
