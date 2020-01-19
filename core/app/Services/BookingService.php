<?php

namespace App\Services;

use App\Booking;
use App\Repositories\BookingRepository;
use Illuminate\Http\Request;

class BookingService
{
    public function __construct(BookingRepository $booking)
    {
        $this->room = $booking;
    }

    public function index()
    {
        return $this->booking->all();
    }

    public function create(Request $request)
    {
        $attributes = $request->all();

        return $this->booking->create($attributes);
    }

    public function read($id)
    {
        return $this->booking->find($id);
    }

    public function update(Request $request, $id)
    {
        $attributes = $request->all();

        return $this->booking->update($id, $attributes);
    }

    public function delete($id)
    {
        return $this->booking->delete($id);
    }
}
