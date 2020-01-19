<?php

namespace App\Http\Controllers;

use App\RoomType;
use App\Services\RoomTypeService;
use Exception;
use Illuminate\Http\Request;
use App\Http\Requests\RoomTypeRequest;

class RoomTypeController extends Controller
{
    protected $roomTypeService;

    public function __construct(RoomTypeService $roomTypeService)
    {
        $this->roomTypeService = $roomTypeService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        try {
            $rooms = $this->roomTypeService->index();
            return response()->json($rooms);
        } catch (Exception $e) {
            return response()->json($e, '400');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(RoomTypeRequest $request)
    {
        try {
            $room = $this->roomTypeService->create($request);
            return response()->json($room, '201');
        } catch (Exception $e) {
            return response()->json($e, '400');

        }

    }

    /**
     * Display the specified resource.
     *
     * @param room $room
     * @return Response
     */
    public function show($id)
    {
        try {
            $room = $this->roomTypeService->read($id);

            return response()->json($room, '201');
        } catch (Exception $e) {
            return response()->json($e, '400');

        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param room $room
     * @return Response
     */
    public function update(RoomTypeRequest $request, $id)
    {
        try {
            $room = $this->roomTypeService->update($request, $id);

            return response()->json($request, '200');
        } catch (Exception $e) {
            return response()->json($e, '400');

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param room $room
     * @return Response
     */
    public function destroy($id)
    {
        try {
            $this->roomTypeService->delete($id);
            return response()->json(['message'=>'deleted successfully '], '200');
        } catch (Exception $e) {
            return response()->json($e, '400');

        }

    }
}
