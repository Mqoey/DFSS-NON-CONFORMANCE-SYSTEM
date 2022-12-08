<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCustomerRequest;
use App\Models\Customer;
use App\Models\NonConformativeForm;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $customers = Customer::all();

        return view('superadmin.customers.index', ['customers' => $customers]);
    }

    public function dashboard()
    {
        $customer_id = Auth::user()->customer->id;

        $onholdforms = NonConformativeForm::where('status', 'onhold')
            ->where('customer_id', $customer_id)
            ->count();
        $pendingforms = NonConformativeForm::where('status', 'pending')
            ->where('customer_id', $customer_id)
            ->count();
        $closedforms = NonConformativeForm::where('status', 'closed')
            ->where('customer_id', $customer_id)
            ->count();

        return view('customer.dashboard',
            [
                'onholdforms' => $onholdforms,
                'pendingforms' => $pendingforms,
                'closedforms' => $closedforms,
            ]
        );
    }

    public function nonconformativeforms()
    {
        $customer_id = Auth::user()->customer->id;

        $nonconformativeforms = NonConformativeForm::where('customer_id', $customer_id)->get();

        return view('customer.nonconformativeform.index', ['nonconformativeforms' => $nonconformativeforms]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('superadmin.customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreCustomerRequest  $request
     * @return RedirectResponse
     */
    public function store(StoreCustomerRequest $request)
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
        $user->role = 'customer';
        $user->save();

        if ($user) {
            $customer = new Customer();
            $customer->user_id = $user->id;
            $customer->company = $request->company;
            $customer->save();

            if ($customer) {
                return redirect()->route('customer.index')
                    ->with('success', 'Customer created successfully');
            } else {
                return redirect()->route('customer.create')
                    ->with('error', 'Customer not created');
            }
        } else {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
}
