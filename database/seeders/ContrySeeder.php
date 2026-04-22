<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class ContrySeeder extends Seeder {
    public function run(): void
    {
        for ($x=0; $x<5; $x++){

            DB::table('contry')->insert([
				[
				'name' => 'Страна '.$x,
				],  
			]);
        }
    }
}