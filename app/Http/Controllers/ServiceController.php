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
    public function store(StoreserviceRequest $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateserviceRequest $request, service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(service $service)
    {
        //
    }
}
