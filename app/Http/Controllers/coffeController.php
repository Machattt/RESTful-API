<?php

namespace App\Http\Controllers;

use App\Http\Resources\coffeResource;
use App\Models\coffe; 
use Illuminate\Http\Request;

class coffeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = coffe::all();
        return view('coffeView', compact('data'));
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

    $request->validate([
    'hour_of_day' => 'required|numeric',
    'cash_type'   => 'required|string',
    'money'       => 'required|numeric',
    'coffee_name' => 'required|string',
    'Time_of_Day' => 'required|string',
    'Weekday'     => 'required|string',
    'Month_name'  => 'required|string',
    'Weekdaysort' => 'required|numeric',
    'Monthsort'   => 'required|numeric',
    'Date'        => 'required|date',
    'Time'        => 'required',
]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
      
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
