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
    // public function show(Car $car)
    // {
    //     $car = Car::where('id', $car->id)->first();

    //     return view('cars.show')->with('car', $car);
    // }








    public function show($id)
    {
        $car = Car::findOrFail($id);
        $reservs = Reserv::where('cid', $id)->get();

        return view('cars.show', compact('car', 'reservs'));
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
