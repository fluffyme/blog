<?php

use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // reset posts table
        DB::table('posts')->truncate();
        //gererate 10 posts dummy data

        $posts = [];
        $faker = Factory::create();

        for ($i = 1; $i < 10; $i++) {

            $image = "Post_Image_" . rand(1,5) . ".jpg";
            $date = Carbon::now();
            $posts[] = [
                'author_id' => rand(1, 3),
                'title' => $faker->sentence(rand(8, 12)),
                'excerpt' => $faker->text(rand(200, 250)),
                'body' => $faker->paragraphs(rand(10, 15), true),
                'slug'=>$faker->slug(),
                'image'=> rand(0, 1) == 1 ? $image : NULL,
                'created_at' => $date,
                'updated_at' => $date,
            ];
        }

        DB::table('posts')->insert($posts);
    }
}
