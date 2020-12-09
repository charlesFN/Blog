<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;

class BlogPostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Blogpost::class, 50)->create();
    }
}
