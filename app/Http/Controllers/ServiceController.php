<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreserviceRequest;
use App\Http\Requests\UpdateserviceRequest;
use App\Models\Customer;
use App\Models\service;
use App\Models\Vehicle;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dump(service::find(1));
        return view('spv.service.viewServices', [
            'services' => service::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('spv.service.createServices', [
            'customers' => customer::all(),
            'vehicles' => vehicle::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreserviceRequest $request)
    {
        dd($request->all());
        service::create($request->all());
        // NOT YET FINISHED
        return redirect()->to(route('service.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(service $service)
    {
        return view('spv.service.detail', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(service $service)
    {
        return view('spv.service.ubahServices', compact('service'))->with('tambahServ-success', 'Data Berhasil Disimpan!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateserviceRequest $request, service $service)
    {
  
        $service->update($request->all());
        return redirect()->to(route('service.index'))->with('tambahServ-success', 'Data Berhasil Disimpan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(service $service)
    {
        $service->delete();
        return redirect()->to(route('service.index'))->with('hapusServ-success', 'Data Berhasil Dihapus!');
    }
}
