@extends('layouts.superadmin')
@section('title', 'Customers')
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <h3>Add Customer</h3>
                    </div>
                    <div class="col-12 col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/"> <i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">Add Customer</li>
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
                            @if (Session::has('error'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>{{ Session::get('error') }}</strong>
                                    <button class="btn-close" type="button" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            <form class="f1" method="POST" action="{{ route('customer.store') }}">
                                @csrf
                                <div class="f1-steps">
                                    <div class="f1-progress">
                                        <div class="f1-progress-line" data-now-value="16.66" data-number-of-steps="3"></div>
                                    </div>
                                    <div class="f1-step active">
                                        <div class="f1-step-icon"><i data-feather="user-plus"></i></div>
                                        <p>User</p>
                                    </div>
                                    <div class="f1-step">
                                        <div class="f1-step-icon"><i data-feather="shield"></i></div>
                                        <p>Company</p>
                                    </div>
                                    <div class="f1-step">
                                        <div class="f1-step-icon"><i data-feather="radio"></i></div>
                                        <p>Airport</p>
                                    </div>
                                </div>
                                <fieldset>
                                    <div class="mb-2">
                                        <label for="f1-first-name">First Name</label>
                                        <input class="form-control" id="f1-first-name" type="text" name="first_name"
                                            placeholder="firstname" required="">
                                    </div>
                                    <div class="mb-2">
                                        <label for="f1-last-name">Last name</label>
                                        <input class="f1-last-name form-control" id="f1-last-name" type="text"
                                            name="last_name" placeholder="lastname" required="">
                                    </div>
                                    <div class="mb-2">
                                        <label class="f1-last-name" for="f1-email">Email</label>
                                        <input class="f1-last-name form-control" id="f1-email" type="email"
                                            name="email" placeholder="email" required="">
                                    </div>
                                    <div class="f1-buttons">
                                        <button class="btn btn-primary btn-next" type="button">Next</button>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <div class="mb-2">
                                        <label class="f1-last-name" for="f1-password">Name</label>
                                        <input class="f1-last-name form-control" id="f1-password" type="text"
                                            name="company" placeholder="company" required="">
                                    </div>
                                    <div class="mb-2">
                                        <label class="f1-last-name" for="f1-password">Address</label>
                                        <input class="f1-last-name form-control" id="f1-password" type="text"
                                            name="" placeholder="address" required="">
                                    </div>
                                    <div class="f1-buttons">
                                        <button class="btn btn-primary btn-previous" type="button">Previous</button>
                                        <button class="btn btn-primary btn-next" type="button">Next</button>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <div class="mb-2">
                                        <label class="f1-last-name">Select Airport</label>
                                        <select class="form-select f1-last-name digits" name="airport_id"
                                            id="exampleFormControlSelect9">
                                            @foreach ($airports as $airport)
                                                <option value="{{ $airport->id }}">{{ $airport->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="f1-buttons">
                                        <button class="btn btn-primary btn-previous" type="button">Previous</button>
                                        <button class="btn btn-primary btn-submit" type="submit">Submit</button>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        @if (Session::has('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>{{ Session::get('error') }}</strong>
                                <button class="btn-close" type="button" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        <form class="form theme-form" method="POST" action="{{ route('customer.store') }}">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <div class="row g-3">
                                                <div class="col-md-6">
                                                    <label class="form-label" for="validationCustom01">First name</label>
                                                    <input class="form-control" id="validationCustom01" type="text"
                                                        name="first_name" placeholder="firstname" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label" for="validationCustom02">Last name</label>
                                                    <input class="form-control" id="validationCustom02" type="text"
                                                        name="last_name" placeholder="lastname" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="exampleFormControlInput1">Email address</label>
                                            <input class="form-control" id="exampleFormControlInput1" type="email"
                                                name="email" required placeholder="name@example.com">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <input class="form-control" name="password" id="exampleInputPassword2"
                                                type="hidden" value="12345678" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="exampleFormControlSelect9">Select Airport
                                            </label>
                                            <select class="form-select digits" name="role"
                                                id="exampleFormControlSelect9">
                                                @foreach ($airports as $airport)
                                                    <option value="{{ $airport->id }}">{{ $airport->name }}</option>
                                                @endforeach
                                            </select>
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
        </div> --}}
    </div>
@endsection
@section('scripts')
    <script src="../assets/js/form-wizard/form-wizard-three.js"></script>
    <script src="../assets/js/form-wizard/jquery.backstretch.min.js"></script>
@endsection
