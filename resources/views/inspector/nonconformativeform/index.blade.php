@extends('layouts.inspector')
@section('title', 'Non-Conformative Forms')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Non-Conformative Forms Raised by Me</h4>
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
                                    <th>Department</th>
                                    <th>Inspector Admin</th>
                                    <th>Non Conformity</th>
                                    <th>Corrective Action</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($nonconformativeforms as $nonconformativeform)
                                    <tr>
                                        <td>{{ $nonconformativeform->customer->user->name }}</td>
                                        <td>{{ $nonconformativeform->inspectoradmin->user->name }}</td>
                                        <td>{{ $nonconformativeform->non_conformity }}</td>
                                        <td>{{ $nonconformativeform->corrective_action }}</td>
                                        <td>
                                            @if ($nonconformativeform->status == 'closed')
                                                <span class="badge light badge-success">
														<i class="fa fa-circle text-success me-1"></i>Closed</span>
                                            @elseif ($nonconformativeform->status == 'onhold')
                                                <span class="badge light badge-primary">
														<i class="fa fa-circle text-primary me-1"></i>On hold</span>
                                            @elseif ($nonconformativeform->status == 'pending')
                                                <span class="badge light badge-danger">
														<i class="fa fa-circle text-danger me-1"></i>Pending</span>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Department</th>
                                    <th>Inspector Admin</th>
                                    <th>Non Conformity</th>
                                    <th>Corrective Action</th>
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
