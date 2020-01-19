<?php

namespace App\Repositories;

use App\Room;

class RoomRepository
{
    protected $room;

    public function __construct(Room $room)
    {
        $this->room = $room;
    }
    public function create($attributes)
    {
        return $this->room->create($attributes);
    }

    public function all()
    {
        return $this->room->all();
    }

    public function find($id)
    {
        return $this->room->find($id);
    }

    public function update($id, array $attributes)
    {
        return $this->room->find($id)->update($attributes);
    }

    public function delete($id)
    {
        return $this->room->find($id)->delete();
    }
}
