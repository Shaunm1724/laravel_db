<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'title',
        'content',
        'user_id',
    ];
}
