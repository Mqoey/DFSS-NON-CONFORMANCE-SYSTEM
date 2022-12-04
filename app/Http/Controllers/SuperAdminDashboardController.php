<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Inspector;
use App\Models\InspectorAdmin;
use App\Models\NonConformativeForm;

class SuperAdminDashboardController extends Controller
{
    public function index()
    {
        $customers = Customer::all()->count();
        $inspectors = Inspector::all()->count();
        $inspectoradmins = InspectorAdmin::all()->count();
        $nonconformativeforms = NonConformativeForm::all()->count();
        $onholdforms = NonConformativeForm::where('status', 'onhold')->count();
        $pendingforms = NonConformativeForm::where('status', 'pending')->count();
        $closedforms = NonConformativeForm::where('status', 'closed')->count();

        return view('superadmin.dashboard',
            [
                'customers' => $customers,
                'inspectors' => $inspectors,
                'inspectoradmins' => $inspectoradmins,
                'nonconformativeforms' => $nonconformativeforms,
                'onholdforms' => $onholdforms,
                'pendingforms' => $pendingforms,
                'closedforms' => $closedforms,
            ]
        );
    }
}
