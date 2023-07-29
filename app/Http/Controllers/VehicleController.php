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
        return view('spv.vehicles.viewVehicles',[
            'vehicles' => Vehicle::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('spv.vehicles.tambahVehicles');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorevehicleRequest $request)
    {
        Vehicle::create($request->all());
        return redirect()->to(route('vehicle.index'));
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
        return view('spv.vehicles.ubahVehicles', compact('vehicle'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatevehicleRequest $request, vehicle $vehicle)
    {
        $vehicle->update($request->all());
        return redirect()->to(route('vehicle.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vehicle $vehicle)
    {
        $vehicle->delete();
        return redirect()->to(route('vehicle.index'));
    }
}
