<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class PostTableSeeder extends Seeder
{
    public function run()
    {
        App\Post::truncate();
        factory(App\Post::class, 20)->create();
    }
}