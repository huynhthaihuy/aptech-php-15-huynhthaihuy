<?php

use App\Post;
use Illuminate\Database\Seeder;

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
        $faker = Faker\Factory::create();
        foreach (range(1, 10) as $index) {
            Post::create([
                'title' => $faker->name,
                'description' => $faker->company,
                'content'=> $faker->name,
                'category_id' => $faker->randomDigit
            ]);
        }
    }
}
