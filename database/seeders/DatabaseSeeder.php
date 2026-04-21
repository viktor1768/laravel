<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;
    public function run(): void
    {
			$this->call([
				PostSeeder::class,
				CommentSeeder::class,
                ThumbnailSeeder::class,
			]);


    }
}

