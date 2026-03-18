<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use PostSeeder;
use CommentSeeder;


class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;
    public function run(): void
    {

            DB::table('posts')->insert([
				[
				'title' => Str::random(10),
				'slug' => Str::random(30),
				'likes' => rand(50,800),
				],  
			]);


    }
}
