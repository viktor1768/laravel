<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class PostSeeder extends Seeder {
    public function run(): void
    {
        for ($x=0; $x<8; $x++){

            DB::table('posts')->insert([
				[
				'title' => Str::random(10),
				'slug' => Str::random(30),
				'likes' => rand(50,800),
				],  
			]);
        }
    }
}
