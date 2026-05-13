<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class LandMarkSeeder extends Seeder {
    public function run(): void
    {
        for ($x=0; $x<30; $x++){

            DB::table('landmark')->insert([
				[
				'name' => Str::random(10),
                'desc' => Str::random(30),
				'city_id' => rand(1,30),
				],  
			]);
        }
    }
}
