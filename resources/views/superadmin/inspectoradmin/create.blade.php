@extends('layouts.superadmin')
@section('title', 'Inspector Admins')
@section('content')
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Add Inspector Admin</a></li>
            </ol>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        @if (Session::has('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>{{ Session::get('error') }}</strong>
                                <button class="btn-close" type="button" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                            </div>
                        @endif
                    </div>
                    <div class="card-body">
                        <div class="basic-form">

                            <form class="form theme-form" method="POST" action="{{ route('inspectoradmin.store') }}">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <div class="row g-3">
                                                    <div class="col-md-6">
                                                        <label class="form-label" for="validationCustom01">First
                                                            name</label>
                                                        <input class="form-control" id="validationCustom01" type="text"
                                                               name="first_name" required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label" for="validationCustom02">Last
                                                            name</label>
                                                        <input class="form-control" id="validationCustom02" type="text"
                                                               name="last_name" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label class="form-label" for="exampleFormControlInput1">Email
                                                    address</label>
                                                <input class="form-control" id="exampleFormControlInput1" type="email"
                                                       name="email" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-end">
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                    <input class="btn btn-light" type="reset" value="Cancel">
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
