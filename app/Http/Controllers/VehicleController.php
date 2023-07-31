<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorevehicleRequest;
use App\Http\Requests\UpdatevehicleRequest;
use App\Models\vehicle;
use App\Models\service;

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

        try {
            vehicle::create($request->all());
        } catch (\Throwable $th) {
            throw $th;
        }
        return redirect()->to(route('service.index'))->with('tambahServ-success', 'Data Berhasil Disimpan!');
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
        return view('spv.vehicles.ubahVehicles', compact('vehicle'))->with('tambahVehi-success', 'Data Berhasil Disimpan!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatevehicleRequest $request, vehicle $vehicle)
    {
        $vehicle->update($request->all());
        return redirect()->route('customer.show', ['customer' => $vehicle->customer_id])->with('tambahVehi-success', 'Data Berhasil Disimpan!');
    }    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vehicle $vehicle)
    {
        $vehicle->delete();
        return redirect()->route('customer.show', ['customer' => $vehicle->customer_id])->with('hapusVehi-success', 'Data Berhasil Dihapus!');
    }
}
