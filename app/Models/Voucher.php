<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    use HasFactory;
    protected $primaryKey = 'voucher_id';
    public function scopeSearch($query)
    {
        if (request()->code == null) {
            $query = $query->where('voucher_code', "NOVOUCHER");
        }else {
            if(!empty($query->where('voucher_code',request()->code))){
                if ($code = request()->code) {
                    $query = $query->where('voucher_code', $code);
            
            }else{ 
                $query = $query->where('voucher_code', "NOVOUCHER");
            }}
           
        }
        return $query;
    }
}
