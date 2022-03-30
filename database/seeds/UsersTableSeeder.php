<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         factory(\App\User::class,5000)->create();
        /**
          \DB::table('users')->insert([
            'name'     => 'First User',
            'email'    => 'email@email.com',
            'password' => bcrypt('secret')
        ]); */
    }
}
