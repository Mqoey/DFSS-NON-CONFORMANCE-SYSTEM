@extends('layouts.superadmin')
@section('title', 'Dashboard')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 col-xxxl-12 col-lg-6">
                <div class="card">
                    <div class="card-header border-0 pb-3 d-sm-flex d-block ">
                        <h4 class="card-title">Latest Non-conformity Forms</h4>
                    </div>
                    <div class="card-body">
                        <div class="row mx-0 align-items-center">
                            <div class="col-sm-8 col-md-7 col-xxl-7 px-0 text-center mb-3 mb-sm-0">
                                <div id="chart" class="d-inline-block"></div>
                            </div>
                            <div class="col-sm-4 col-md-5 col-xxl-5 px-0">
                                <div class="chart-deta">
                                    <div class="col px-0">
                                        <span class="bg-warning"></span>
                                        <div class="mx-3">
                                            <p class="fs-14">Forms Solved</p>
                                            <h3>21,512</h3>
                                        </div>
                                    </div>
                                    <div class="col px-0">
                                        <span class="bg-primary"></span>
                                        <div class="mx-3">
                                            <p class="fs-14">Forms Pending</p>
                                            <h3>456,72</h3>
                                        </div>
                                    </div>
                                    <div class="col px-0">
                                        <span class="bg-success"></span>
                                        <div class="mx-3">
                                            <p class="fs-14">Forms Onhold</p>
                                            <h3>235</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row mx-0">
                            <div class="col-sm-12 col-lg-4 px-0">
                                <h2 class="fs-40 text-black font-w600">{{ $nonconformativeforms }} <small
                                        class="fs-18 ms-2 font-w600 mb-1">forms</small>
                                </h2>
                                <p class="font-w100 fs-20 text-black">Raised</p>
                                <div class="justify-content-between border-0 d-flex fs-14 align-items-end">
                                    <a href="javascript:void(0);" class="text-primary">View more <i
                                            class="las la-long-arrow-alt-right scale5 ms-2"></i></a>
                                    <div class="text-end">
                                        <span class="peity-primary" data-style="width:100%;">0,2,1,4</span>
                                        <h3 class="mt-2 mb-1">+4%</h3>
                                        <span>than last day</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-8 px-0">
                                <canvas id="ticketSold" height="200"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
