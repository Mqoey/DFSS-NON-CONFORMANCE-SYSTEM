<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreConformatyRequest;
use App\Http\Requests\UpdateConformatyRequest;
use App\Models\Conformaty;

class ConformatyController extends Controller
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
     * @param  \App\Http\Requests\StoreConformatyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreConformatyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Conformaty  $conformaty
     * @return \Illuminate\Http\Response
     */
    public function show(Conformaty $conformaty)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Conformaty  $conformaty
     * @return \Illuminate\Http\Response
     */
    public function edit(Conformaty $conformaty)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateConformatyRequest  $request
     * @param  \App\Models\Conformaty  $conformaty
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateConformatyRequest $request, Conformaty $conformaty)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Conformaty  $conformaty
     * @return \Illuminate\Http\Response
     */
    public function destroy(Conformaty $conformaty)
    {
        //
    }
}
