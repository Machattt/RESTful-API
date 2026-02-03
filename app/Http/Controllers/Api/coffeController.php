<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\coffeResource;
use App\Models\coffe;
use Illuminate\Support\Facades\Validator;

class coffeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = coffe::all();
        // return $data;
        return new coffeResource(true, 'Menampilkan semua data coffe', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
     $validator = Validator::make($request->all(), [


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

    if($validator->fails()){
        return response()->json($validator->errors(), 422);
    }
    $data = coffe::create($request->all());
    return new coffeResource(true, 'Data coffe berhasil ditambahkan', $data);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $coffe = coffe::find($id);

        if (!$coffe) {
            return response()->json(['message' => 'data coffe tidak ditemukan'], 404);
        }

        return coffe::findOrFail($id)->toResource(coffeResource::class);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $coffe = coffe::find($id);

        if (!$coffe) {
            return response()->json(['message' => 'data coffe tidak ditemukan'], 404);
        }

        $validator = Validator::make($request->all(), [
            'hour_of_day' => 'numeric',
            'cash_type'   => 'string',
            'money'       => 'numeric',
            'coffee_name' => 'string',
            'Time_of_Day' => 'string',
            'Weekday'     => 'string',
            'Month_name'  => 'string',
            'Weekdaysort' => 'numeric',
            'Monthsort'   => 'numeric',
            'Date'        => 'date',
            'Time'        => 'time',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $coffe->update($request->all());
        
        return new coffeResource(true, 'data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $coffe = coffe::find($id);

        if (!$coffe) {
            return response()->json(['message' => 'data coffe tidak ditemukan'], 404);
        }

        $coffe->delete();
        return response()->json(['message' => 'data coffe berhasil dihapus'], 200);
    }
}

