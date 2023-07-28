<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreserviceRequest;
use App\Http\Requests\UpdateserviceRequest;
use App\Models\service;

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
        return view('spv.service.tambahServices');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(service $service)
    {
        return view('spv.service.ubahServices', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateserviceRequest $request, service $service)
    {
        dd($request->all()); 
        // NOT YET FINISHED
        $service->update($request->all());
        return redirect()->to(route('service.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(service $service)
    {
        $service->delete();
        return redirect()->to(route('service.index'));
    }
}
