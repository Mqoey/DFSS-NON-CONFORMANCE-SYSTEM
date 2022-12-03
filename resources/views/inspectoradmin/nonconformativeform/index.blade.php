@extends('layouts.inspectoradmin')
@section('title', 'Non-Conformative Forms')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">All Non-Conformative Forms</h4>
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
                                    <th>Customer</th>
                                    <th>Inspector</th>
                                    <th>Non Conformity</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($nonconformativeforms as $nonconformativeform)
                                        <tr>
                                            <td>{{ $nonconformativeform->customer->user->name }}</td>
                                            <td>{{ $nonconformativeform->inspector->user->name }}</td>
                                            <td>{{ $nonconformativeform->non_conformity }}</td>
                                            <td>{{ $nonconformativeform->status }}</td>
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
                                                        @if ($nonconformativeform->status == 'pending')
                                                            <a href="{{ route('close', $nonconformativeform->id) }}"
                                                               class="dropdown-item">Close</a>
                                                        @elseif ($nonconformativeform->status == 'closed')
                                                            <a href="{{ route('open', $nonconformativeform->id) }}"
                                                               class="dropdown-item">Open</a>
                                                        @endif
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Customer</th>
                                    <th>Inspector</th>
                                    <th>Non Conformity</th>
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
