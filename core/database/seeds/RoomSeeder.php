<?php

use App\Hotel;
use App\Room;
use App\RoomType;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $names = ['A1', 'A2', 'A3', 'A4', 'A5', 'B1', 'B2', 'B3', 'B4', 'B5'];
        foreach (range(0,count($names)-1) as $index) {
            Room::create([
            'room_name' => $names[$index],
            'hotel_id' => Hotel::find(1)->id,
            'room_type_id' => RoomType::all()->random()->id,
            'price' => $faker->numberBetween($min = 50, $max = 500),
            'image' => $faker->imageUrl($width = 200, $height = 200)
            ]);
        }


    }
}
