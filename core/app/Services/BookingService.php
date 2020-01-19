<?php

namespace App\Services;

use App\Booking;
use App\Room;
use App\Repositories\BookingRepository;
use Illuminate\Http\Request;
use App\Http\Requests\BookingRequest;

class BookingService
{
    public function __construct(BookingRepository $booking)
    {
        $this->booking = $booking;
    }

    public function index()
    {
        return $this->booking->all();
    }

    public function create(BookingRequest $request)
    {

        $attributes = $request->all();
        $fdate = $request->start_date;
        $tdate = $request->end_date;
        $datetime1 = new \DateTime($fdate);
        $datetime2 = new \DateTime($tdate);
        $total_nights = $datetime1->diff($datetime2);
        $total_nights = $total_nights->format('%a');
        $attributes['total_nights'] = $total_nights;
        $room = Room::find($request->room_id);
        $total_price = $room->price * $total_nights;
        $attributes['total_price'] = $total_price ;

        return $this->booking->create($attributes);
    }

    public function read($id)
    {
        return $this->booking->find($id);
    }

    public function update(BookingRequest $request, $id)
    {
        $attributes = $request->all();

        return $this->booking->update($id, $attributes);
    }

    public function delete($id)
    {
        return $this->booking->delete($id);
    }
}
