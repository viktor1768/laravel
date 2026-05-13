<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Contry;
use App\Models\User;
use App\Models\City;

class City extends Model
{
    protected $table = 'landmarks';
	public function city()
	{
        return $this->belongsTo(City::class);
	}
    protected $fillable = [
        'name',
        'desc',
    ];
}