<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    use HasFactory;
    public function run()
    {
        Post::factory(50)->create();
    }
}
