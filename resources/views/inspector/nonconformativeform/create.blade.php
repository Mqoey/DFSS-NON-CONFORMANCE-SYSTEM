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
                    <div class="col-12 col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/"> <i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">Add Non-Conformative Form</li>
                        </ol>
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
                        <form class="form theme-form" method="POST"
                              action="{{ route('inspectornonconformativeform.store') }}">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="exampleFormControlSelect9">Select
                                                Customer</label>
                                            <select class="form-select digits" name="customer_id"
                                                    id="exampleFormControlSelect9">
                                                @foreach($customers as $customer)
                                                    <option value="{{$customer->id}}">{{$customer->user->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body pt-0">
                                <div class="todo">
                                    <div class="todo-list-wrapper">
                                        <div class="todo-list-container">
                                            <div class="todo-list-body">
                                                <ul id="todo-list">
                                                </ul>
                                            </div>
                                            <div class="todo-list-footer">
                                                <div class="new-task-wrapper">
                                                <textarea id="new-task"
                                                          placeholder="Enter new non conformity here. . ."></textarea><span
                                                        class="btn btn-success ms-3 add-new-task-btn"
                                                        id="add-task"> Add </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="notification-popup hide">
                                        <p><span class="task"></span><span class="notification-text"></span></p>
                                    </div>
                                </div>
                                <!-- HTML Template for tasks-->
                                <script id="task-template" type="tect/template">
                                    <li class="task">
                                        <div class="task-container">
                                            <h4 class="task-label"></h4>
                                            <span class="task-action-btn">
                      <span class="action-box large delete-btn" title="Delete Task">
                      <i class="icon"><i class="icon-trash"></i></i>
                      </span>
                      <span class="action-box large complete-btn" title="Mark Complete">
                      <i class="icon"><i class="icon-check"></i></i>
                      </span>
                      </span>
                                        </div>
                                    </li>
                                </script>
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
