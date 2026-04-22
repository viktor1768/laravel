<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class CitySeeder extends Seeder {
    public function run(): void
    {
        for ($x=0; $x<30; $x++){

            DB::table('city')->insert([
				[
				'name' => Str::random(10),
				'contry_id' => rand(1,5),
				],  
			]);
        }
    }
}
