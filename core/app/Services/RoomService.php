<?php

namespace App\Services;

use App\Room;
use App\Repositories\RoomRepository;
use Illuminate\Http\Request;

class RoomService
{
    public function __construct(RoomRepository $room)
    {
        $this->room = $room;
    }

    public function index()
    {
        return $this->room->all();
    }

    public function create(Request $request)
    {
        $attributes = $request->all();

        return $this->room->create($attributes);
    }

    public function read($id)
    {
        return $this->room->find($id);
    }

    public function update(Request $request, $id)
    {
        $attributes = $request->all();

        return $this->room->update($id, $attributes);
    }

    public function delete($id)
    {
        return $this->room->delete($id);
    }
}
