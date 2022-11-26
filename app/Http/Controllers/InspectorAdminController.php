<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\InspectorAdmin;
use App\Http\Requests\StoreInspectorAdminRequest;
use App\Http\Requests\UpdateInspectorAdminRequest;
use App\Models\NonConformativeForm;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class InspectorAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inspectorAdmin = InspectorAdmin::all();
        return view('superadmin.inspectoradmin.index')
            ->with('inspectoradmins', $inspectorAdmin);
    }

    public function nonconformativeforms()
    {
        $nonconformativeforms = NonConformativeForm::all();
        return view('customer.nonconformativeform.index')
            ->with('nonconformativeforms', $nonconformativeforms);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('superadmin.inspectoradmin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreInspectorAdminRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInspectorAdminRequest $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
        ]);

        $user = new User();
        $user->name = $request->first_name . ' ' . $request->last_name;
        $user->email = $request->email;
        $user->password = Hash::make('12345678');
        $user->role = "inspectoradmin";
        $user->save();

        if ($user) {
            $inspectoradmin = new InspectorAdmin();
            $inspectoradmin->user_id = $user->id;
            $inspectoradmin->save();

            if ($inspectoradmin) {
                return redirect()->route('inspectoradmin.index')
                    ->with('success', 'Inspector Admin created successfully');
            } else {
                return redirect()->route('inspectoradmin.create')
                    ->with('error', 'Inspector Admin not created');
            }
        } else {
            return redirect()->back()->with('error', 'Something went wrong');
        }
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
