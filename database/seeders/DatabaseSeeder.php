<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(3)->create();
        // \App\Models\Category::factory(5)->create();
       //  \App\Models\Type::factory(10)->create();
       //  \App\Models\Post::factory(10)->create();
         DB::table('users')->insert([
                 ['id'=>1, 'name'=>'Hoang Phat' ,'email'=>'hoangphat@gmail.com','password'=>bcrypt(1234567890)]
            ]);
    }
}
