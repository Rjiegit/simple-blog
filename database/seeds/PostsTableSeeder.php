<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();
        foreach (range(1, 50) as $index) {
            DB::table('posts')->insert([
                'title'   => $faker->word,
                'content' => $faker->text,
            ]);
        }
    }
}
