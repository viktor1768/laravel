<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Contry;
use App\Models\User;
use App\Models\Landmark;

class City extends Model
{
    protected $table = 'citys';
	public function contry()
	{
        return $this->belongsTo(Contry::class);
	}
	public function user()
	{
        return $this->hasMany(User::class, 'city_id');
	}
	public function landmark()
	{
        return $this->hasMany(Landmark::class, 'city_id');
	}
    protected $fillable = [
        'name',
    ];
}