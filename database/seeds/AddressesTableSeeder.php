<?php

use Illuminate\Database\Seeder;
use App\Address;
use App\Person;

class AddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Address::class)->create();
        foreach()
        {
            \DB::table('pets')->insert([
                'name'       => 'Pet',
                'color_name'     => 'Amarelo',
                'date_of_birth' => '2020-01-16',
                'people_id'     => rand(1,150)
            ]);
        }
    }
}
