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
        //reservs table
        $reservationData = [
            'cid' => $request->input('cid'),
            'created_at' => $request->input('created_at'),
            'updated_at' => $request->input('updated_at'),
            'reservated_at' => $request->input('reservated_at'),
        ];
        Reserv::create($reservationData);


        //cars table
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
