<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Contry;

class City extends Model
{
    protected $table = 'citys';
	public function contry()
	{
        return $this->belongsTo(Contry::class);
	}
    protected $fillable = [
        'name',
    ];
}