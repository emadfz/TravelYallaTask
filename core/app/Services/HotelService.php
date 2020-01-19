<?php

namespace App\Services;

use App\Hotel;
use App\Repositories\HotelRepository;
use Illuminate\Http\Request;

class HotelService
{
    public function __construct(HotelRepository $hotel)
    {
        $this->hotel = $hotel;
    }

    public function index()
    {
        return $this->hotel->all();
    }

    public function create(Request $request)
    {
        $attributes = $request->all();

        return $this->hotel->create($attributes);
    }

    public function read($id)
    {
        return $this->hotel->find($id);
    }

    public function update(Request $request, $id)
    {
        $attributes = $request->all();

        return $this->hotel->update($id, $attributes);
    }

    public function delete($id)
    {
        return $this->hotel->delete($id);
    }
}
