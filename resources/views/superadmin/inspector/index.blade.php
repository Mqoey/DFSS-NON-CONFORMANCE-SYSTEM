@extends('layouts.superadmin')
@section('title', 'Inspectors')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">All Inspectors</h4>
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
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($inspectors as $inspector)
                                        <tr>
                                            <td>{{ $inspector->user->name }}</td>
                                            <td>{{ $inspector->user->email }}</td>
                                            <td>
                                                @if ($inspector->user->status == 'active')
                                                    <span class="badge light badge-success">
														<i class="fa fa-circle text-success me-1"></i>Active</span>
                                                @elseif ($inspector->user->status == 'inactive')
                                                    <span class="badge light badge-danger">
														<i class="fa fa-circle text-danger me-1"></i>Inactive</span>
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
                                        <th>Name</th>
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
