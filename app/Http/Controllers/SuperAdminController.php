<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSuperAdminRequest;
use App\Models\Customer;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SuperAdminController extends Controller
{
    public function viewroles()
    {
        $roles = Role::all();
        return view('superadmin.roles.index')
            ->with('roles', $roles);
    }

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
            'email' => 'required',
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

    // customers

    public function viewcustomers()
    {
        $customers = Customer::all();
        return view('superadmin.customers.index')
            ->with('customers', $customers);
    }

    public function createcustomer()
    {
        $roles = Role::all();
        return view('superadmin.customers.create')
            ->with('roles', $roles);
    }

    public function storecustomer(StoreSuperAdminRequest $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);

        $customer = new Customer();
        $customer->name = $request->first_name . ' ' . $request->last_name;
        $customer->email = $request->email;
        $customer->password = Hash::make($request->password);
        $customer->role = $request->role;
        $customer->save();

        if ($customer) {
            return redirect(route('customer.index'))
                ->with('success', 'Created Customer Successfully');
        } else {
            return redirect()->back()
                ->with('error', 'Something went wrong');
        }
    }
}
