<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('Posts')->insert([
            'title' => 'Lupita Smith',
            'desc' => 'lupita@gmail.com sfsfgdfgfdgdf'
        ]);

        factory(\App\Post::class)->create(['title' => 'hanomaaaa']);

    }
}
