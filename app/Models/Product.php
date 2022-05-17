<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function manufacture()
    {
        return $this->belongsTo(Manufacture::class,"manu_id");
    }
    public function protype()
    {
        return $this->belongsTo(Protype::class,"type_id");
    }
    //Tìm kiếm
    public function scopeSearch($query){
        if($key = request()->key){
            $query = $query->where('name','like','%'.$key.'%');
        }
        return $query;
    }
}
