<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNonConformativeFormRequest;
use App\Http\Requests\UpdateNonConformativeFormRequest;
use App\Models\Customer;
use App\Models\InspectorAdmin;
use App\Models\NonConformativeForm;
use Illuminate\Support\Facades\Auth;

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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $customers = Customer::all();
        $inspectoradmins = InspectorAdmin::all();

        return view('inspector.nonconformativeform.create')
            ->with('inspectoradmins', $inspectoradmins)
            ->with('customers', $customers);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreNonConformativeFormRequest  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(StoreNonConformativeFormRequest $request)
    {
//        dd($request->all());
        $nonconformativeform = new NonConformativeForm();
        $nonconformativeform->customer_id = $request->customer_id;
        $nonconformativeform->inspector_admin_id = $request->inspectoradmin_id;
        $nonconformativeform->non_conformity = $request->non_conformity;
        $nonconformativeform->inspector_id = Auth::user()->inspector->id;
        $nonconformativeform->status = 'pending';
        $nonconformativeform->save();

        if ($nonconformativeform) {
            return redirect(route('inspectornonconformativeform.index'))->with('success', 'Non Conformative Form created successfully');
        } else {
            return redirect(route('inspectornonconformativeform.index'))->with('error', 'Non Conformative Form could not be created');
        }
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
