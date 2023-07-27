<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorecustomerRequest;
use App\Http\Requests\UpdatecustomerRequest;
use App\Models\customer;
use App\Models\User;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('spv.customer.viewCustomers', [
            'customers' => customer::all()
        ]);
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('spv.customer.tambahCustomers');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorecustomerRequest $request)
    {
        try {
            customer::create($request->all());
        } catch (\Throwable $th) {
            throw $th;
        }
        return redirect()->to(route('customer.index'));

    }

    /**
     * Display the specified resource.
     */
    public function show(customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(customer $customer)
    {
        return view('spv.customer.ubahCustomers', [
            'customer' => $customer
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecustomerRequest $request, customer $customer)
    {
        $customer->update($request->all());
        return redirect()->to(route('customer.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(customer $customer)
    {
        $customer->delete();
        return redirect()->to(route('customer.index'));
    }
}
