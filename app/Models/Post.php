<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Thumbnail;

class Post extends Model
{
	public function thumbnail()
	{
        return $this->hasOne(Thumbnail::class);
	}
    protected $fillable = [
        'title',
        'desc',
        'text',
        'create_post',
    ];
}