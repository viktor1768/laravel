<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\Thumbnail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class ThumbnailSeeder extends Seeder {
    public function run(): void
    {
        $posts = Post::all();
        
        foreach ($posts as $post) {
            Thumbnail::create([
                'path' => '/img/post-' . $post->id . '.jpg',
                'alt' => 'Миниатюра для поста ' . $post->id,
                'post_id' => $post->id,
            ]);
        }
    }
}
