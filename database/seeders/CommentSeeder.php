<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class CommentSeeder extends Seeder {
    public function run(): void
    {
        for ($x=0; $x<15; $x++){

            DB::table('users')->insert([
				[
				'name' => Str::random(10),
				'email' => Str::random(10).'@mail.ru',
				'age' => rand(10,80),
                'salary' => rand(12000,80000),
                'password' => Hash::make('12345'),
                'city_id' => rand(1,20),
				],  
			]);
        }
    }
}

