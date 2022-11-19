<?php

namespace App\Http\Controllers;

use App\Models\Inspector;
use App\Http\Requests\StoreInspectorRequest;
use App\Http\Requests\UpdateInspectorRequest;

class InspectorController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreInspectorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInspectorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inspector  $inspector
     * @return \Illuminate\Http\Response
     */
    public function show(Inspector $inspector)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inspector  $inspector
     * @return \Illuminate\Http\Response
     */
    public function edit(Inspector $inspector)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInspectorRequest  $request
     * @param  \App\Models\Inspector  $inspector
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInspectorRequest $request, Inspector $inspector)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inspector  $inspector
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inspector $inspector)
    {
        //
    }
}
