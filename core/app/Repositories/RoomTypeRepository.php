<?php

namespace App\Repositories;

use App\RoomType;

class RoomTypeRepository
{
    protected $room_type;

    public function __construct(RoomType $room_type)
    {
        $this->room_type = $room_type;
    }
    public function create($attributes)
    {
        return $this->room_type->create($attributes);
    }

    public function all()
    {
        return $this->room_type->all();
    }

    public function find($id)
    {
        return $this->room_type->find($id);
    }

    public function update($id, array $attributes)
    {
        return $this->room_type->find($id)->update($attributes);
    }

    public function delete($id)
    {
        return $this->room_type->find($id)->delete();
    }
}
