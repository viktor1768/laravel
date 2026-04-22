<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Thumbnail extends Model
{
	public function post()
	{
	    return $this->belongsTo(Post::class);
	}
    protected $fillable = [
        'path',
        'alt',
    ];
}