<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carts extends Model
{
    protected $primaryKey = ['user_id', 'product_id' ];
    use HasFactory;
    public function products()
    {
        return $this->hasMany(Product::class,'id','product_id');
    }
}
