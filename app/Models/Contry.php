<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\City;
use App\Models\User;

class Contry extends Model
{
    protected $table = 'contrys';
	public function City()
	{
        return $this->hasMany(City::class, 'contry_id');
	}
	public function User()
	{
	    return $this->hasManyThrough(User::class, City::class, 'contry_id', 'city_id');
	}
    protected $fillable = [
        'name',
    ];
}