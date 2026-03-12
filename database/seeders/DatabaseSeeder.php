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
        $this->call([
            PostSeeder::class,
            CommentSeeder::class,
        ]);

            DB::table('users')->insert([
				[
				'name' => Str::random(10),
				'email' => Str::random(10).'@gmail.com',
				'password' => Hash::make('12345'),
				],  
			]);


    }
}
class PostSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {

            DB::table('users')->insert([
				[
				'name' => Str::random(10),
				'email' => Str::random(10).'@gmail.com',
				'password' => Hash::make('12345'),
				],  
			]);


    }
}
