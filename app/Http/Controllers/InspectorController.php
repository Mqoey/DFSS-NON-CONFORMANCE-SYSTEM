<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInspectorRequest;
use App\Models\Inspector;
use App\Models\NonConformativeForm;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class InspectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $inspectors = Inspector::all();

        return view('superadmin.inspector.index', ['inspectors' => $inspectors]);
    }

    public function dashboard()
    {
        $inspector_id = Auth::user()->inspector->id;

        $onholdforms = NonConformativeForm::where('status', 'onhold')
            ->where('inspector_id', $inspector_id)
            ->count();
        $pendingforms = NonConformativeForm::where('status', 'pending')
            ->where('inspector_id', $inspector_id)
            ->count();
        $closedforms = NonConformativeForm::where('status', 'closed')
            ->where('inspector_id', $inspector_id)
            ->count();

        return view('inspector.dashboard',
            [
                'onholdforms' => $onholdforms,
                'pendingforms' => $pendingforms,
                'closedforms' => $closedforms,
            ]
        );
    }

    public function nonconformativeforms()
    {
        $inspector_id = Auth::user()->inspector->id;

        $nonconformativeforms = NonConformativeForm::where('inspector_id', $inspector_id)->get();

        return view('inspector.nonconformativeform.index', ['nonconformativeforms' => $nonconformativeforms]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('superadmin.inspector.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreInspectorRequest  $request
     * @return RedirectResponse
     */
    public function store(StoreInspectorRequest $request)
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
        $user->role = 'inspector';
        $user->save();

        if ($user) {
            $inspector = new Inspector();
            $inspector->user_id = $user->id;
            $inspector->save();

            if ($inspector) {
                return redirect()->route('inspector.index')
                    ->with('success', 'Inspector created successfully');
            } else {
                return redirect()->route('inspector.create')
                    ->with('error', 'Inspector not created');
            }
        } else {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
}
