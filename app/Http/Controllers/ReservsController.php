<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Reserv;
use Illuminate\Http\Request;
use Illuminate\Support\Faades\DB;

class ReservsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // $reservs = Reserv::join('cars', 'reservs.cnum', '=', 'cars.cnum')
        // ->select('reservs.*', 'cars.*')
        // ->get();
        // return view('cars.show', compact('reservs'));


        // $car = Car::find($id);
        // $reserv = new Reserv();
        // $reserv->cnum = $car->cnum;
        // $reserv->save(); 





        $reservs = Reserv::all();

        return view('cars.show')->with('dataer', $reservs);

    }
 
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Reserv $reserv)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reserv $reserv)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reserv $reserv)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reserv $reserv)
    {
        //
    }



}
