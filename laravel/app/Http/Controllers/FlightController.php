<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $flights = Flight::all();
        return view('view', compact('flights'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Flight $flight)
    {
        return view('view', compact('flight'));
    }
}
