<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        App\User::truncate();
        factory(App\User::class, 5)->create();
    }
}