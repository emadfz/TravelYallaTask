<?php

namespace App\Http\Controllers;

use App\Hotel;
use App\Services\HotelService;
use Exception;
use Illuminate\Http\Request;
use App\Http\Requests\HotelRequest;

class HotelController extends Controller
{
    protected $hotelService;

    public function __construct(HotelService $hotelService)
    {
        $this->hotelService = $hotelService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        try {
            $hotels = $this->hotelService->index();
            return response()->json($hotels);
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
    public function store(HotelRequest $request)
    {
        try {
            $hotel = $this->hotelService->create($request);
            return response()->json($hotel, '201');
        } catch (Exception $e) {
            return response()->json($e, '400');

        }

    }

    /**
     * Display the specified resource.
     *
     * @param Hotel $hotel
     * @return Response
     */
    public function show($id)
    {
        try {
            $hotel = $this->hotelService->read($id);

            return response()->json($hotel, '201');
        } catch (Exception $e) {
            return response()->json($e, '400');

        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Hotel $hotel
     * @return Response
     */
    public function update(HotelRequest $request, $id)
    {
        try {
            $hotel = $this->hotelService->update($request, $id);

            return response()->json($request, '200');
        } catch (Exception $e) {
            return response()->json($e, '400');

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Hotel $hotel
     * @return Response
     */
    public function destroy($id)
    {
        try {
            $this->hotelService->delete($id);
            return response()->json(['message'=>'deleted successfully '], '200');
        } catch (Exception $e) {
            return response()->json($e, '400');

        }

    }
}
