<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $primaryKey = 'comment_id';
    protected $table = 'comments';
    protected $fillable = [
        'comment_id',
        'comment',
        'comment_product_id',
        'comment_name',
        'comment_date',
    ];
    public $timestamps = false;
}
