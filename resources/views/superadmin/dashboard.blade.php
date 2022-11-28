@extends('layouts.superadmin')
@section('title', 'Dashboard')
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <h3>
                            Dashboard</h3>
                    </div>
                    <div class="col-12 col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="home-item" href="/"><i
                                        data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid ecommerce-dash">
            <div class="row">
                <div class="">
                    <a href="{{route('customer.index')}}">
                        <div class="card total-sale">
                            <div class="card-header card-no-border">
                                <div class="media">
                                    <div class="media-body">
                                        <h5 class="mb-0">Customers</h5>
                                    </div>
                                </div>
                                <div class="animat-block">
                                    <ul>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="sale-main">
                                    <div class="sale-left">
                                        <h5 class="font-primary">{{$customers}}</h5>
                                    </div>
                                    <div class="sale-right">
                                        <div id="total-sales-chart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-md-6 dash-xl-50 dash-50">
                    <a href="{{route('inspectoradmin.index')}}">
                        <div class="card total-sale">
                            <div class="card-header card-no-border">
                                <div class="media">
                                    <div class="media-body">
                                        <h5 class="mb-0">Inspector Admins</h5>
                                    </div>
                                </div>
                                <div class="animat-block">
                                    <ul>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="sale-main">
                                    <div class="sale-left">
                                        <h6 class="font-danger"><i class="icon-arrow-down"></i></h6>
                                        <h5 class="font-primary">{{$inspectoradmins}}</h5>
                                    </div>
                                    <div class="sale-right">
                                        <div id="total-sales-chart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-md-6 dash-xl-50 dash-50">
                    <a href="{{route('inspector.index')}}">
                        <div class="card total-sale">
                            <div class="card-header card-no-border">
                                <div class="media">
                                    <div class="media-body">
                                        <h5 class="mb-0">Inspectors</h5>
                                    </div>
                                </div>
                                <div class="animat-block">
                                    <ul>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="sale-main">
                                    <div class="sale-left">
                                        <h6 class="font-danger"><i class="icon-arrow-down"></i></h6>
                                        <h5 class="font-primary">{{$inspectors}}</h5>
                                    </div>
                                    <div class="sale-right">
                                        <div id="total-sales-chart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
