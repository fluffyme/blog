<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        DB::table('users')->truncate();
        //generate 3 users

        DB::table('users')->insert([
           ['name'=> 'Jon Watson',
            'email'=>'jonwatson@test.com',
            'password'=>bcrypt('secret')
           ],
           ['name'=> 'Jane Watson',
            'email'=>'janewatson@test.com',
            'password'=>bcrypt('secret')
           ],
           ['name'=> 'Edwin Watson',
            'email'=>'edwinwatson@test.com',
            'password'=>bcrypt('secret')
           ],
        ]);
    }
}
