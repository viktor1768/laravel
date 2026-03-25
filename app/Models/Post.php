<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  const UPDATED_AT = 'last_update';
    protected $fillable = [
        'title',
        'desc',
        'text',
        'create_post',
    ];
}
