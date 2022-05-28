<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $fillable = [
        'order_name',
        'order_address',
        'order_phone',
        'order_email',
        'order_notes',
    ];
    public function orders_items()
    {
        return $this->hasMany(Orders_Items::class,'order_id','id');
    }
}
