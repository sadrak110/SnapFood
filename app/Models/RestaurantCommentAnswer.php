<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RestaurantCommentAnswer extends Model
{
    use HasFactory;

    protected $fillable = [
        'reply_to',
        'content'
    ];
}
