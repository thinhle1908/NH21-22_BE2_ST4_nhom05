<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Protype extends Model
{
    protected $primaryKey = 'type_id';
    protected $fillable = ['type_id','type_name','created_at','updated_at'];
    use HasFactory;
    public function products()
    {
        return $this->hasMany(Product::class,'type_id','type_id');
    }
}
