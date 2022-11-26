<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSuperAdminRequest;
use App\Http\Requests\UpdateSuperAdminRequest;
use App\Models\Customer;
use App\Models\NonConformativeForm;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Request;

class SuperAdminController extends Controller
{
    public function viewusers()
    {
        $users = User::all();
        return view('superadmin.users.index')
            ->with('users', $users);
    }

    public function createuser()
    {
        $roles = Role::all();
        return view('superadmin.users.create')
            ->with('roles', $roles);
    }

    public function storeuser(StoreSuperAdminRequest $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'role' => 'required',
        ]);

        $user = new User();
        $user->name = $request->first_name . ' ' . $request->last_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = $request->role;
        $user->save();

        if ($user) {
            return redirect(route('user.index'))
                ->with('success', 'Created User Successfully');
        } else {
            return redirect()->back()
                ->with('error', 'Something went wrong');
        }
    }

    public function nonconformativeform(){
        $nonconformativeforms = NonConformativeForm::all();
        return view('superadmin.nonconformativeform.index')
            ->with('nonconformativeforms', $nonconformativeforms);
    }

    public function activate(UpdateSuperAdminRequest $request)
    {
        // $user = User::find($request->id);
        dd($request->all);
        // $user->status = 'active';
        // $user->save();

        // if ($user) {
        //     return redirect(route('user.index'))
        //         ->with('success', 'Activated User Successfully');
        // } else {
        //     return redirect()->back()
        //         ->with('error', 'Something went wrong');
        // }
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
