<?php

namespace App\Http\Controllers;

use App\Models\InspectorAdmin;
use App\Http\Requests\StoreInspectorAdminRequest;
use App\Http\Requests\UpdateInspectorAdminRequest;
use App\Models\User;

class InspectorAdminController extends Controller
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
        $inspectorAdmin = InspectorAdmin::all();
        return view('superadmin.inspectoradmin.index')
            ->with('inspectorAdmin', $inspectorAdmin);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreInspectorAdminRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInspectorAdminRequest $request)
    {
        return view('superadmin.inspector.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InspectorAdmin  $inspectorAdmin
     * @return \Illuminate\Http\Response
     */
    public function show(InspectorAdmin $inspectorAdmin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InspectorAdmin  $inspectorAdmin
     * @return \Illuminate\Http\Response
     */
    public function edit(InspectorAdmin $inspectorAdmin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInspectorAdminRequest  $request
     * @param  \App\Models\InspectorAdmin  $inspectorAdmin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInspectorAdminRequest $request, InspectorAdmin $inspectorAdmin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InspectorAdmin  $inspectorAdmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(InspectorAdmin $inspectorAdmin)
    {
        //
    }
}
