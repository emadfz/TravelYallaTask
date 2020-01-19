<?php

namespace App\Http\Controllers;

use App\Room;
use App\Services\BookingService;
use Exception;
use Illuminate\Http\Request;
use App\Http\Requests\BookingRequest;

class BookingController extends Controller
{
    protected $bookingService;

    public function __construct(BookingService $bookingService)
    {
        $this->bookingService = $bookingService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        try {
            $rooms = $this->bookingService->index();
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
    public function store(BookingRequest $request)
    {
        try {
            $room = $this->bookingService->create($request);
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
            $room = $this->bookingService->read($id);

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
    public function update(BookingRequest $request, $id)
    {
        try {
            $room = $this->bookingService->update($request, $id);

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
            $this->bookingService->delete($id);
            return response()->json(['message'=>'deleted successfully '], '200');
        } catch (Exception $e) {
            return response()->json($e, '400');

        }

    }
}
