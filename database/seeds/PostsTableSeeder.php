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
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('posts')->truncate();
        //gererate 10 posts dummy data

        $posts = [];
        $faker = Factory::create();

        for ($i = 1; $i < 10; $i++) {

            $image = "Post_Image_" . rand(1,5) . ".jpg";
            $date = Carbon::create(2020, 03, 18, 9);
            $date = $date->addDays($i);
            $posts[] = [
                'author_id' => rand(1, 3),
                'title' => $faker->sentence(rand(8, 12)),
                'excerpt' => $faker->text(rand(200, 250)),
                'body' => $faker->paragraphs(rand(10, 15), true),
                'slug'=>$faker->slug(),
                'image'=> rand(0, 1) == 1 ? $image : NULL,
                'created_at' => $date,
                'updated_at' => $date,
                'published_at' => rand(1,0) == 0 ? NULL : $date->addDays($i+ rand(4, 10)),
            ];
        }

        DB::table('posts')->insert($posts);
    }
}
