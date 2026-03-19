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
				'desc' => Str::random(25),
				'create_post' => date('d-m-y', mktime(0, 0, 0, rand(0,12), rand(0,28), rand(0,20))),
                'text' => Str::random(50),
				],  
			]);
        }
    }
}
