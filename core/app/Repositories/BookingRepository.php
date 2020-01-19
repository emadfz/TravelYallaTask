<?php

namespace App\Repositories;

use App\Booking;

class BookingRepository
{
    protected $room_type;

    public function __construct(Booking $booking)
    {
        $this->room_type = $booking;
    }
    public function create($attributes)
    {
        return $this->booking->create($attributes);
    }

    public function all()
    {
        return $this->booking->all();
    }

    public function find($id)
    {
        return $this->booking->find($id);
    }

    public function update($id, array $attributes)
    {
        return $this->booking->find($id)->update($attributes);
    }

    public function delete($id)
    {
        return $this->booking->find($id)->delete();
    }
}
