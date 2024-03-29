<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
         $this->call(PostsTableSeeder::class);
         $this->call(CountrySeeder::class);
         $this->call(AddressesTableSeeder::class);
         $this->call(PeopleTableSeeder::class);
         $this->call(PetsTableSeeder::class);
         $this->call(PlayerSeeder::class);
         $this->call(CarSeeder::class);
    }
}
