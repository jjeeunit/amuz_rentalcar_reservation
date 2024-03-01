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

    public function reservation()
    {
        return view('cars.reservation');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Car::create($request->all());

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
