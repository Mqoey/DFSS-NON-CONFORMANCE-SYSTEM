@extends('layouts.superadmin')
@section('title', 'Customers')
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <h3>Customers</h3>
                    </div>
                    <div class="col-12 col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/"> <i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">Customers</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                @if (Session::has('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong>{{ Session::get('success') }}</strong>
                                        <button class="btn-close" type="button" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @endif
                                <table class="display" id="basic-1">
                                    <thead>
                                        <tr>
                                            <th>Company</th>
                                            <th>Airport</th>
                                            <th>Username</th>
                                            <th>Email</th>
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
                                                    @elseif($customer->user->status == 'inactive')
                                                        <span class="btn btn-outline-danger">Inactive</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($customer->user->status == 'active')
                                                        <a href="{{ route('customer.deactivate', $customer->id) }}"
                                                            class="btn btn-danger">Deactivate</a>
                                                    @elseif($customer->user->status == 'inactive')
                                                        <a href="{{ route('customer.activate', $customer->id) }}"
                                                            class="btn btn-success">Activate</a>
                                                    @endif
                                                </td>
                                                <td>
                                                    <div>
                                                        <a href="{{ route('customer.edit', $customer->id) }}"><i
                                                                data-feather="edit"></i></a>
                                                        <a href="{{ route('customer.destroy', $customer->id) }}"><i
                                                                data-feather="trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
