<?php

use App\Post;
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
        $faker = Faker\Factory::create();
        $category = App\Category::pluck('id');
        foreach ($category as $key => $value) {
            App\Post::create([
                'title' => $faker->name,
                'description'=>$faker->paragraph,
                'content'=>$faker->randomHtml(),
                'ct_id' => $value,
            ]);
        }
    }
}
