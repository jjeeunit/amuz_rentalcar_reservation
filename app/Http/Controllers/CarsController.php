<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Reserv;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::all();
        $reservs = Reserv::all();

        return view('cars.list', compact('cars', 'reservs'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cars.create');
    }


    /**
     * reservation a newly created resource in storage.
     */
    public function reservation($id)
    {
        $cars = Car::all();
        $reservs = Reserv::all();

        return view('cars.reservation', compact('cars', 'reservs','id'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $carData = [
            'cev' => $request->input('cev'),
            'csize' => $request->input('csize'),
            'cmodel' => $request->input('cmodel'),
            'cmaker' => $request->input('cmaker'),
            'cnum' => $request->input('cnum'),
            'cmoney' => $request->input('cmoney'),
        ];

        Car::create($carData);


        return redirect()->route('cars.index');
    }


    /**
     * stores a newly created resource in storage.
     */
    public function stores(Request $request)
    {
        $isOverlap = $this->duplicate($request)->getData()->overlap;

        if ($isOverlap) {
            return redirect()->back()->with('error', '중복된 예약이 있습니다. insert');
        } 

        $reservationData = [
            'cid' => $request->input('cid'),
            'reservated_at' => $request->input('reservated_at'),
            'started_at' => $request->input('started_at'),
            'ended_at' => $request->input('ended_at'),
        ];
        Reserv::create($reservationData);

        return redirect()->route('cars.show', $reservationData['cid']);
    }



    /**
     * duplicate a newly created resource in storage.
     */
    public function duplicate(Request $request)
    {
        $reservedTimes = Reserv::where('started_at', '<=', $request->ended_at)
                                ->where('ended_at', '>=', $request->started_at)
                                ->where('cid', $request->cid)
                                ->pluck('cid');

        return response()->json(['overlap' => $reservedTimes->isNotEmpty()]);
    }



    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        $reservs = Reserv::where('cid', $car->id)->get();

        if (!is_null($reservs))
        return view('cars.show')->with('reservs', $reservs);
    }




    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        //
    }
}
