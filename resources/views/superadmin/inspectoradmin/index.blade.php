@extends('layouts.superadmin')
@section('title', 'Inspector Admins')
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <h3>Inspector Admins</h3>
                    </div>
                    <div class="col-12 col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/"> <i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">Inspector Admins</li>
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
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th>Activate</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($inspectoradmins as $inspector)
                                            <tr>
                                                <td>{{ $inspector->user->name }}</td>
                                                <td>{{ $inspector->user->email }}</td>
                                                <td>
                                                    @if ($inspector->user->status == 'active')
                                                        <span class="btn btn-outline-success">Active</span>
                                                    @elseif($inspector->user->status == 'inactive')
                                                        <span class="btn btn-outline-danger">Inactive</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($inspector->user->status == 'active')
                                                        <a href="{{ route('inspectoradmin.deactivate', $inspector->id) }}"
                                                            class="btn btn-danger">Deactivate</a>
                                                    @elseif($inspector->user->status == 'inactive')
                                                        <a href="{{ route('inspectoradmin.activate', $inspector->id) }}"
                                                            class="btn btn-success">Activate</a>
                                                    @endif
                                                </td>
                                                <td>
                                                    <div>
                                                        <a href="{{ route('inspectoradmin.edit', $inspector->id) }}"><i
                                                                data-feather="edit"></i></a>
                                                        <a href="{{ route('inspectoradmin.destroy', $inspector->id) }}"><i
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
