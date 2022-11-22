@extends('layouts.superadmin')
@section('title', 'Users')
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <h3>Users</h3>
                    </div>
                    <div class="col-12 col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/"> <i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">Users</li>
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
                                            <th>Role</th>
                                            <th>Status</th>
                                            <th>Activate</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>
                                                    @if ($user->role == 'superadmin')
                                                        Super Admin
                                                    @elseif($user->role == 'inspectoradmin')
                                                        Inspector Admin
                                                    @elseif($user->role == 'inspector')
                                                        Inspector
                                                    @elseif($user->role == 'user')
                                                        user
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($user->status == 'active')
                                                        <span class="btn btn-outline-success">Active</span>
                                                    @elseif($user->status == 'inactive')
                                                        <span class="btn btn-outline-danger">Inactive</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($user->status == 'active')
                                                        <a href="{{ route('user.deactivate', $user->id) }}"
                                                            class="btn btn-danger">Deactivate</a>
                                                    @elseif($user->status == 'inactive')
                                                        <a href="{{ route('user.activate', $user->id) }}"
                                                            class="btn btn-success">Activate</a>
                                                    @endif
                                                </td>
                                                <td>
                                                    <div>
                                                        <a href="{{ route('user.edit', $user->id) }}"><i
                                                                data-feather="edit"></i></a>
                                                        <a href="{{ route('user.destroy', $user->id) }}"><i
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
