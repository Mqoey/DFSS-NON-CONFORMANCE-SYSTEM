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

    public function viewusers()
    {
        $users = User::all();
        return view('inspectoradmin.users.index')
            ->with('users', $users);
    }

    public function createuser()
    {
        return view('inspectoradmin.users.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreInspectorAdminRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function storeuser(StoreInspectorAdminRequest $request)
    {
        dd($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        return redirect(route('user.index'));
    }

    public function edituser(InspectorAdmin $inspectorAdmin)
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
    public function updateuser(UpdateInspectorAdminRequest $request, InspectorAdmin $inspectorAdmin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InspectorAdmin  $inspectorAdmin
     * @return \Illuminate\Http\Response
     */
    public function destroyuser(InspectorAdmin $inspectorAdmin)
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
     * @param  \App\Http\Requests\StoreInspectorAdminRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInspectorAdminRequest $request)
    {
        //
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
