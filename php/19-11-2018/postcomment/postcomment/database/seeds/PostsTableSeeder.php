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
        $commentId = App\Comment::pluck('id')->toArray();
        // [1,2,3] = $categoriesId
        // dd($categoriesId[array_rand($categoriesId)]);
        // dd($categoriesId);
        foreach (range(1, 10) as $index) {
            App\Post::create([
                'title' => $faker->name,
                'description' => $faker->paragraph,
                'content' => $faker->randomHtml(),
                'comment_id' => $commentId[array_rand($commentId)],
            ]);
        }
    }
}