<?php

use Illuminate\Database\Seeder;
use App\Hotel;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();


        $hotel = new Hotel();
        $hotel->name = "Hilton";
        $hotel->address = $faker->address ;
        $hotel->city = $faker->city;
        $hotel->state = $faker->city ;
        $hotel->country = $faker->country ;
        $hotel->zip_code = $faker->postcode ;
        $hotel->email = $faker->email ;
        $hotel->phone = $faker->phoneNumber ;
        $hotel->image = "https://www.google.com/url?sa=i&source=images&cd=&ved=2ahUKEwiKoqr13o_nAhUIyzgGHQf-A6AQjRx6BAgBEAQ&url=https%3A%2F%2Fwww.agoda.com%2Fhilton-istanbul-bosphorus%2Fhotel%2Fistanbul-tr.html&psig=AOvVaw06Qt7fMy79IdFkdjRGMzGe&ust=1579525969129173";
        error_log($hotel);

        $hotel->save();


     }
}
