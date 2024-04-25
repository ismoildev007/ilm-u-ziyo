<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'partners_name' => 'Collage',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'partners_name' => 'School',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($posts as $post) {
            Post::create($post);
        }
    }
}
