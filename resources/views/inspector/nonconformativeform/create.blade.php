<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
          content="Zeta admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
          content="admin template, Zeta admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{ asset('assets/images/logo/favicon-icon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon-icon.png') }}" type="image/x-icon">
    <title> Inspector | Create </title>
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/font-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/icofont.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/themify.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/flag-icon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/feather-icon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/todo.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link id="color" rel="stylesheet" href="{{ asset('assets/css/color-1.css') }}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">
</head>

<body>
<div class="tap-top"><i data-feather="chevrons-up"></i></div>
<div class="page-wrapper compact-wrapper" id="pageWrapper">
    @include('components.navs.header')
    <div class="page-body-wrapper">
        <div class="sidebar-wrapper">
            <div>
                <div class="logo-wrapper"><a href="/"><img class="img-fluid for-light"
                                                           src="{{ asset('assets/images/logo/small-logo.png') }}"
                                                           alt=""><img
                            class="img-fluid for-dark" src="{{ asset('assets/images/logo/small-white-logo.png') }}"
                            alt=""></a>
                    <div class="back-btn"><i class="fa fa-angle-left"></i></div>
                </div>
                <div class="logo-icon-wrapper"><a href="/"><img class="img-fluid"
                                                                src="{{ asset('assets/images/logo-icon.png') }}" alt=""></a>
                </div>
                @include('components.navs.inspector')
            </div>
        </div>
        <!-- Page Sidebar Ends-->
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
                    <div class="col-xl-12">
                        <div class="card">
                            @if (Session::has('error'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>{{ Session::get('error') }}</strong>
                                    <button class="btn-close" type="button" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                </div>
                            @endif
                            <div class="card-header">
                                <h5>Issues</h5>
                            </div>

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
                                                    @foreach ($customers as $customer)
                                                        <option value="{{ $customer->id }}">
                                                            {{ $customer->user->name }}</option>
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
                                                    <div class="add-task-btn-wrapper"><span class="add-task-btn">
                                                                <a class="btn btn-primary"> Add new Issue</a></span>
                                                    </div>
                                                    <div class="new-task-wrapper">
                                                        <textarea id="new-task"
                                                                  placeholder="Enter new task here. . ."></textarea>
                                                        <span class="btn btn-danger cancel-btn"
                                                              id="close-task-panel">Close</span>
                                                        <span class="btn btn-success ms-3 add-new-task-btn"
                                                              id="add-task">Add Issue</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="notification-popup hide">
                                            <p><span class="task"></span><span class="notification-text"></span>
                                            </p>
                                        </div>
                                    </div>
                                    <script id="task-template" type="tect/template">
                                        <li class="task">
                                            <div class="task-container">
                                                <h4 class="task-label"></h4>
                                                <span class="task-action-btn">
                                                    <span class="action-box large delete-btn" title="Delete Task">
                                                        <i class="icon"><i class="icon-trash"></i></i>
                                                    </span>
                                                    <span class="action-box large complete-btn"
                                                          title="Mark     Complete">
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
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 footer-copyright text-center">
                        <p class="mb-0"> Copyright 2022 © University Of Zimbabwe </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/icons/feather-icon/feather.min.js') }}"></script>
<script src="{{ asset('assets/js/icons/feather-icon/feather-icon.js') }}"></script>
<script src="{{ asset('assets/js/scrollbar/simplebar.js') }}"></script>
<script src="{{ asset('assets/js/scrollbar/custom.js') }}"></script>
<script src="{{ asset('assets/js/config.js') }}"></script>
<script src="{{ asset('assets/js/sidebar-menu.js') }}"></script>
<script src="{{ asset('assets/js/todo/todo.js') }}"></script>
<script src="{{ asset('assets/js/tooltip-init.js') }}"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>
