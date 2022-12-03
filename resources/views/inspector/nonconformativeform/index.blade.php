@extends('layouts.inspector')
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
                                    <th>Assigned Admin</th>
                                    <th>Non Conformity</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($nonconformativeforms as $nonconformativeform)
                                    <tr>
                                        <td>{{ $nonconformativeform->customer->user->name }}</td>
                                        <td>{{ $nonconformativeform->inspector->user->name }}</td>
                                        <td>{{ $nonconformativeform->inspectoradmin->user->name }}</td>
                                        <td>{{ $nonconformativeform->non_conformity }}</td>
                                        <td>{{ $nonconformativeform->status }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Customer</th>
                                    <th>Inspector</th>
                                    <th>Assigned Admin</th>
                                    <th>Non Conformity</th>
                                    <th>Status</th>
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
