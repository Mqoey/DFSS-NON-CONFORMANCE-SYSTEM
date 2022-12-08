<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNonConformativeFormRequest;
use App\Models\Customer;
use App\Models\InspectorAdmin;
use App\Models\NonConformativeForm;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;

class NonConformativeFormController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $customers = Customer::all();
        $inspectoradmins = InspectorAdmin::all();

        return view('inspector.nonconformativeform.create', ['inspectoradmins' => $inspectoradmins, 'customers' => $customers]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreNonConformativeFormRequest  $request
     * @return Application|RedirectResponse|Redirector
     */
    public function store(StoreNonConformativeFormRequest $request)
    {
        $nonconformativeform = new NonConformativeForm();
        $nonconformativeform->customer_id = $request->customer_id;
        $nonconformativeform->inspector_admin_id = $request->inspectoradmin_id;
        $nonconformativeform->non_conformity = $request->non_conformity;
        $nonconformativeform->corrective_action = $request->corrective_action;
        $nonconformativeform->inspector_id = Auth::user()->inspector->id;
        $nonconformativeform->status = 'pending';
        $nonconformativeform->save();

        if ($nonconformativeform) {
            return redirect(route('inspectornonconformativeform.index'))->with('success', 'Non Conformative Form created successfully');
        } else {
            return redirect(route('inspectornonconformativeform.index'))->with('error', 'Non Conformative Form could not be created');
        }
    }
}
