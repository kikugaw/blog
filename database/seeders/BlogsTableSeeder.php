<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Blog;


class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\Models\Blog::class,15)->create();
       \App\Models\Blog::factory()->count(15)->create();
    }
}