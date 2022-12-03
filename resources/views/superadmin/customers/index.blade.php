@extends('layouts.superadmin')
@section('title', 'Customers')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">All Customers</h4>
                    </div>
                    @if (Session::has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ Session::get('success') }}</strong>
                            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>Company</th>
                                        <th>Airport</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($customers as $customer)
                                        <tr>
                                            <td>{{ $customer->company }}</td>
                                            <td>{{ $customer->airport->name }}</td>
                                            <td>{{ $customer->user->name }}</td>
                                            <td>{{ $customer->user->email }}</td>
                                            <td>
                                                @if ($customer->user->status == 'active')
                                                    <span class="btn btn-outline-success">Active</span>
                                                @elseif ($customer->user->status == 'inactive')
                                                    <span class="btn btn-outline-danger">Inactive</span>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="dropdown ms-auto text-right">
                                                    <div class="btn-link" data-bs-toggle="dropdown">
                                                        <svg width="24px" height="24px" viewBox="0 0 24 24"
                                                            version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24"
                                                                    height="24">
                                                                </rect>
                                                                <circle fill="#000000" cx="5" cy="12"
                                                                    r="2">
                                                                </circle>
                                                                <circle fill="#000000" cx="12" cy="12"
                                                                    r="2">
                                                                </circle>
                                                                <circle fill="#000000" cx="19" cy="12"
                                                                    r="2">
                                                                </circle>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="customer.edit">Edit</a>
                                                        <a class="dropdown-item" href="customer.destroy">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Company</th>
                                        <th>Airport</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
