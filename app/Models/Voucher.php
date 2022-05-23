<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    use HasFactory;
    public function scopeSearch($query)
    {
        if (request()->code == null) {
            $query = $query->where('voucher_code', "NOVOUCHER");
        } else {
            if ($code = request()->code) {
                $query = $query->where('voucher_code', $code);
            }
        }
        return $query;
    }
}
