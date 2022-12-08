<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInspectorAdminRequest;
use App\Models\InspectorAdmin;
use App\Models\NonConformativeForm;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class InspectorAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $inspectorAdmin = InspectorAdmin::all();

        return view('superadmin.inspectoradmin.index', ['inspectoradmins' => $inspectorAdmin]);
    }

    public function index2()
    {
        $inspectorAdmin = InspectorAdmin::all();

        return view('inspectoradmin.nonconformativeform.index', ['inspectoradmins' => $inspectorAdmin]);
    }

    public function dashboard()
    {
        $inspectoradmin_id = Auth::user()->inspectoradmin->id;

        $onholdforms = NonConformativeForm::where('status', 'onhold')
            ->where('inspector_admin_id', $inspectoradmin_id)
            ->count();
        $pendingforms = NonConformativeForm::where('status', 'pending')
            ->where('inspector_admin_id', $inspectoradmin_id)
            ->count();
        $closedforms = NonConformativeForm::where('status', 'closed')
            ->where('inspector_admin_id', $inspectoradmin_id)
            ->count();

        return view('inspectoradmin.dashboard',
            [
                'onholdforms' => $onholdforms,
                'pendingforms' => $pendingforms,
                'closedforms' => $closedforms,
            ]
        );
    }

    public function nonconformativeforms()
    {
        $inspector_admin_id = Auth::user()->inspectoradmin->id;

        $nonconformativeforms = NonConformativeForm::where('inspector_admin_id', $inspector_admin_id)->get();

        return view('inspector.nonconformativeform.index', ['nonconformativeforms' => $nonconformativeforms]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('superadmin.inspectoradmin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreInspectorAdminRequest  $request
     * @return RedirectResponse
     */
    public function store(StoreInspectorAdminRequest $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
        ]);

        $user = new User();
        $user->name = $request->first_name.' '.$request->last_name;
        $user->email = $request->email;
        $user->password = Hash::make('12345678');
        $user->role = 'inspectoradmin';
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

    public function adminnonconformativeforms(InspectorAdmin $inspectorAdmin)
    {
        $nonconformativeforms = NonConformativeForm::where('inspector_admin_id', Auth::user()->inspectoradmin->id)->get();

        return view('inspectoradmin.nonconformativeform.index', ['nonconformativeforms' => $nonconformativeforms]);
    }

    public function close($id)
    {
        $nonconformativeform = NonConformativeForm::find($id);
        $nonconformativeform->status = 'closed';
        $nonconformativeform->save();

        if ($nonconformativeform) {
            return redirect()->back()
                ->with('success', 'Form Closed Successfully');
        } else {
            return redirect()->back()
                ->with('error', 'Something went wrong');
        }
    }

    public function open($id)
    {
        $nonconformativeform = NonConformativeForm::find($id);
        $nonconformativeform->status = 'pending';
        $nonconformativeform->save();

        if ($nonconformativeform) {
            return redirect()->back()
                ->with('success', 'Form Opened Successfully');
        } else {
            return redirect()->back()
                ->with('error', 'Something went wrong');
        }
    }

    public function onhold($id)
    {
        $nonconformativeform = NonConformativeForm::find($id);
        $nonconformativeform->status = 'onhold';
        $nonconformativeform->save();

        if ($nonconformativeform) {
            return redirect()->back()
                ->with('success', 'Form On hold Successfully');
        } else {
            return redirect()->back()
                ->with('error', 'Something went wrong');
        }
    }
}
