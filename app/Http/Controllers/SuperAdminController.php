<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateSuperAdminRequest;
use App\Models\Customer;
use App\Models\Inspector;
use App\Models\InspectorAdmin;
use App\Models\NonConformativeForm;
use App\Models\User;

class SuperAdminController extends Controller
{
    public function dashboard()
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

    public function viewusers()
    {
        $users = User::all();

        return view('superadmin.users.index', ['users' => $users]);
    }

    public function nonconformativeform()
    {
        $nonconformativeforms = NonConformativeForm::all();

        return view('superadmin.nonconformativeform.index', ['nonconformativeforms' => $nonconformativeforms]);
    }

    public function activate(UpdateSuperAdminRequest $request, $id)
    {
        $user = User::find($id);
        $user->status = 'active';
        $user->save();

        if ($user) {
            return redirect(route('user.index'))
                ->with('success', 'Activated User Successfully');
        } else {
            return redirect()->back()
                ->with('error', 'Something went wrong');
        }
    }

    public function deactivate($id)
    {
        $user = User::find($id);
        $user->status = 'inactive';
        $user->save();

        if ($user) {
            return redirect(route('user.index'))
                ->with('success', 'Deactivated User Successfully');
        } else {
            return redirect()->back()
                ->with('error', 'Something went wrong');
        }
    }
}
