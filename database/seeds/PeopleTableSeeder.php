<?php

use Illuminate\Database\Seeder;
use App\Person;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Person::class,100)->create();
        for($i = 1; $i <= 50; $i ++)
        {
        \DB::table('people')->insert([
            'name'       => 'User'.$i,
            'date_of_birth' => '1995-01-16',
            'email'     => 'email'.$i.'@email.pt'
        ]);
        }

    }
}
