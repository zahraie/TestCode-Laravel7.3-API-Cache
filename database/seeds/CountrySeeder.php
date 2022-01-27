<?php

use Illuminate\Database\Seeder;
use App\Country;
use Faker\Factory;
class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                //truncate countries table
                Country::truncate();

                //create 100 countries
                factory(Country::class ,10)->create();
    }
}
