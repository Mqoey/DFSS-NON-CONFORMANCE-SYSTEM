<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInspectorAdminRequest;
use App\Models\InspectorAdmin;
use App\Models\NonConformativeForm;
use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class InspectorAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $inspectorAdmin = InspectorAdmin::all();

        return view('superadmin.inspectoradmin.index')
            ->with('inspectoradmins', $inspectorAdmin);
    }

    public function index2()
    {
        $inspectorAdmin = InspectorAdmin::all();

        return view('inspectoradmin.nonconformativeform.index')
            ->with('inspectoradmins', $inspectorAdmin);
    }

    public function nonconformativeforms()
    {
        $nonconformativeforms = NonConformativeForm::all();

        return view('inspector.nonconformativeform.index')
            ->with('nonconformativeforms', $nonconformativeforms);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('superadmin.inspectoradmin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreInspectorAdminRequest  $request
     * @return Response
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

        return view('inspectoradmin.nonconformativeform.index')
            ->with('nonconformativeforms', $nonconformativeforms);
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
}
