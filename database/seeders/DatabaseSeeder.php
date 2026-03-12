<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

            DB::table('posts')->insert([
				[
					'title' => Str::random(10),
					'slug'  => Str::random(10),
					'text'  => Str::random(10),
                    'name' => Str::random(5).'.'.Str::random(10).'.com',
                    'desc' => Str::random(50),
				],  
			]);


    }
}
