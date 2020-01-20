<?php

use Illuminate\Database\Seeder;
use App\Booking;
use App\Room;
use Carbon\Carbon;


class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //room_id', 'start_date', 'end_date', 'customer_full_name', 'phone', 'total_nights', 'total_price' , 'user_id'

        $faker = \Faker\Factory::create();


        for ($i=0 ; $i < 100 ; $i ++){

            $room_id = Room::all()->random()->id;

            $fdate = $faker->dateTimeBetween('+0 days', '+30 days');
            $fdate =Carbon::parse($fdate)->format('Y-m-d');

            $tdate = $faker->dateTimeBetween($startDate = $fdate, $endDate = '+30 days');
            $tdate = Carbon::parse($tdate)->format('Y-m-d');
            $tdate = Carbon::parse($tdate)->addDay(1);

            $datetime1 = new \DateTime($fdate);
            $datetime2 = new \DateTime($tdate);
            $total_nights = $datetime1->diff($datetime2);
            $total_nights = $total_nights->format('%a');
            $attributes['total_nights'] = $total_nights;
            $room = Room::find($room_id);
            $total_price = $room->price * $total_nights;
            $attributes['total_price'] = $total_price ;

            Booking::create([
                'room_id'=> $room_id,
                'start_date' => $fdate,
                'end_date' => $tdate,
                'customer_full_name' => $faker->name,
                'phone'=> $faker->phoneNumber,
                'total_nights' => $total_nights,
                'total_price' => $total_price
            ]);
        }
    }
}
