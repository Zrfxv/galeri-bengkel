<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorevehicleRequest;
use App\Http\Requests\UpdatevehicleRequest;
use App\Models\vehicle;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StorevehicleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(vehicle $vehicle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(vehicle $vehicle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatevehicleRequest $request, vehicle $vehicle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(vehicle $vehicle)
    {
        //
    }
}
