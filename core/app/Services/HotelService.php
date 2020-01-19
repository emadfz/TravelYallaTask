<?php

namespace App\Services;

use App\Hotel;
use App\Http\Requests\HotelRequest;
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

    public function create(HotelRequest $request)
    {
        $attributes = $request->all();

        return $this->hotel->create($attributes);
    }

    public function read($id)
    {
        return $this->hotel->find($id);
    }

    public function update(HotelRequest $request, $id)
    {
        $attributes = $request->all();

        return $this->hotel->update($id, $attributes);
    }

    public function delete($id)
    {
        return $this->hotel->delete($id);
    }
}
