<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\NonConformativeForm;
use App\Http\Requests\StoreNonConformativeFormRequest;
use App\Http\Requests\UpdateNonConformativeFormRequest;

class NonConformativeFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = Customer::all();
        return view('inspector.nonconformativeform.create')
            ->with('customers', $customers);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreNonConformativeFormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNonConformativeFormRequest $request)
    {
        dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NonConformativeForm  $nonConformativeForm
     * @return \Illuminate\Http\Response
     */
    public function show(NonConformativeForm $nonConformativeForm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NonConformativeForm  $nonConformativeForm
     * @return \Illuminate\Http\Response
     */
    public function edit(NonConformativeForm $nonConformativeForm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNonConformativeFormRequest  $request
     * @param  \App\Models\NonConformativeForm  $nonConformativeForm
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNonConformativeFormRequest $request, NonConformativeForm $nonConformativeForm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NonConformativeForm  $nonConformativeForm
     * @return \Illuminate\Http\Response
     */
    public function destroy(NonConformativeForm $nonConformativeForm)
    {
        //
    }
}
