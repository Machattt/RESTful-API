<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\coffeResource;
use App\Models\coffe;

class coffeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = coffe::all();
        return $data;
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
    public function show(string $id)
    {
        return coffe::findOrFail($id)->toResource(coffeResource::class);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $coffe = coffe::findOrFail($id);
        $coffe->update($request->all());
        return new coffeResource($coffe);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
