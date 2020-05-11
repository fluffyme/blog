<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //reset the users
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->truncate();


        //generate 3 users
        $faker = Factory::create();

        DB::table('users')->insert([
           ['name'=> 'Jon Watson',
            'slug'=> 'jon-watson',
            'email'=>'jonwatson@test.com',
            'password'=>bcrypt('secret'),
            'bio'=>$faker->text(rand(250, 300)),
           ],
           ['name'=> 'Jane Watson',
            'slug'=> 'jane-watson',
            'email'=>'janewatson@test.com',
            'password'=>bcrypt('secret'),
            'bio'=>$faker->text(rand(250, 300)),
           ],
           ['name'=> 'Edwin Watson',
            'slug'=> 'edwin-watson',
            'email'=>'edwinwatson@test.com',
            'password'=>bcrypt('secret'),
            'bio'=>$faker->text(rand(250, 300)),
           ],
        ]);
    }
}
