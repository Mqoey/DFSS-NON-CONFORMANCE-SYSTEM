@extends('layouts.inspector')
@section('title', 'Non-Conformative Form')
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <h3>Add Non-Conformative Form</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
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
                        <form class="form theme-form" method="POST" action="{{ route('inspectornonconformativeform.store') }}">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <label class="form-label" for="exampleFormControlSelect9">Select
                                        Customer</label>
                                    <select class="form-select digits" name="customer_id"
                                            id="exampleFormControlSelect9">
                                        @foreach ($customers as $customer)
                                            <option value="{{ $customer->id }}">
                                                {{ $customer->user->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="row">
                                    <label class="form-label" for="exampleFormControlSelect9">Select
                                        Inspector Admin</label>
                                    <select class="form-select digits" name="inspectoradmin_id"
                                            id="exampleFormControlSelect9">
                                        @foreach ($inspectoradmins as $inspectoradmin)
                                            <option value="{{ $inspectoradmin->id }}">
                                                {{ $inspectoradmin->user->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="exampleFormControlInput1">Non conformity</label>
                                            <textarea class="form-control" name="non_conformity" id="exampleFormControlInput1"
                                                      rows="3" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="exampleFormControlInput1">Corrective Action</label>
                                            <textarea class="form-control" name="corrective_action" id="exampleFormControlInput1"
                                                      rows="3" required></textarea>
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
@endsection
