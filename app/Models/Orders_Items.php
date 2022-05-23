<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders_Items extends Model
{
    use HasFactory;
    protected $table = 'orders_items';
    protected $fillable = [
        'order_id',
        'product_id',
        'price',
        'qty',
        'total',
    ];
}
