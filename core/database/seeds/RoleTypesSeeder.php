<?php

use App\RoomType;
use Illuminate\Database\Seeder;

class RoleTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $types = ['Single', 'Double', 'Twin', 'Suite', 'Villa'];
        foreach (range(0, count($types) - 1) as $index) {
            RoomType::create([
                'room_type_name' => $types[$index],
                'details' => $faker->text
            ]);
        }
    }
}
