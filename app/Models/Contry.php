<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\City;

class Contry extends Model
{
    protected $table = 'contrys';
	public function City()
	{
        return $this->hasMany(City::class, 'contry_id');
	}
    protected $fillable = [
        'name',
    ];
}