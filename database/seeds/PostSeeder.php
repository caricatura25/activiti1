<?php

use Illuminate\Database\Seeder;
use App\post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(post::class,5)->create();
    }
}
