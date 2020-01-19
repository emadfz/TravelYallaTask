<?php

namespace App\Services;

use App\RoomType;
use App\Repositories\RoomTypeRepository;
use Illuminate\Http\Request;
use App\Http\Requests\RoomTypeRequest;

class RoomTypeService
{
    public function __construct(RoomTypeRepository $room_type)
    {
        $this->room_type = $room_type;
    }

    public function index()
    {
        return $this->room_type->all();
    }

    public function create(RoomTypeRequest $request)
    {
        $attributes = $request->all();

        return $this->room_type->create($attributes);
    }

    public function read($id)
    {
        return $this->room_type->find($id);
    }

    public function update(RoomTypeRequest $request, $id)
    {
        $attributes = $request->all();

        return $this->room_type->update($id, $attributes);
    }

    public function delete($id)
    {
        return $this->room_type->delete($id);
    }
}
