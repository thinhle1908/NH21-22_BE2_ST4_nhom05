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
        'product_id',
        'user_id',
        'comment_comment',
        'comment_date',
    ];
}
