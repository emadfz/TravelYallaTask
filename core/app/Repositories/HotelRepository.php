<?php

namespace App\Repositories;

use App\Hotel;

class HotelRepository
{
    protected $hotel;

    public function __construct(Hotel $hotel)
    {
        $this->hotel = $hotel;
    }
    public function create($attributes)
    {
        return $this->hotel->create($attributes);
    }

    public function all()
    {
        return $this->hotel->with('room')->get();
    }

    public function find($id)
    {
        return $this->hotel->with('room')->find($id);
    }

    public function update($id, array $attributes)
    {
        return $this->hotel->find($id)->update($attributes);
    }

    public function delete($id)
    {
        return $this->hotel->find($id)->delete();
    }
}
