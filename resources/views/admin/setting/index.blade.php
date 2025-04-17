@extends('admin.layouts.index')
@section('content')
<div class="container-fluid">

    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="btn-group float-right">
                    <ol class="breadcrumb hide-phone p-0 m-0">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Setting</li>
                    </ol>
                </div>
                <h4 class="page-title" style="color: #8c9ea9;">Category</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="row">

                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="icon-contain">
                                <div class="row">
                                    <div class="col-2 align-self-center">
                                        <i class="fas fa-tasks text-gradient-success"></i>
                                    </div>
                                    <div class="col-10 text-right">
                                        <h5 class="mt-0 mb-1 text-warning">62</h5>
                                        <p class="mb-0 font-12"><a href="{{ route('apiuser.index')}}" class="text-info">API User Details</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body justify-content-center">
                            <div class="icon-contain">
                                <div class="row">
                                    <div class="col-2 align-self-center">
                                        <i class="far fa-gem text-gradient-danger"></i>
                                    </div>
                                    <div class="col-10 text-right">
                                        <h5 class="mt-0 mb-1 text-warning">62</h5>
                                        <p class="mb-0 font-12 text-info">Booking Message</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="icon-contain">
                                <div class="row">
                                    <div class="col-2 align-self-center">
                                        <i class="fas fa-users text-gradient-warning"></i>
                                    </div>
                                    <div class="col-10 text-right">
                                        <h5 class="mt-0 mb-1 text-warning">14</h5>
                                        <p class="mb-0 font-12 text-info">Booking Report</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="card ">
                        <div class="card-body">
                            <div class="icon-contain">
                                <div class="row">
                                    <div class="col-2 align-self-center">
                                        <i class="fas fa-database text-gradient-primary"></i>
                                    </div>
                                    <div class="col-10 text-right">
                                        <h5 class="mt-0 mb-1 text-warning">$15562</h5>
                                        <p class="mb-0 font-12 text-info">Credit Card Charges</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="card ">
                        <div class="card-body">
                            <div class="icon-contain">
                                <div class="row">
                                    <div class="col-2 align-self-center">
                                        <i class="fas fa-database text-gradient-primary"></i>
                                    </div>
                                    <div class="col-10 text-right">
                                        <h5 class="mt-0 mb-1 text-warning">$15562</h5>
                                        <p class="mb-0 font-12 text-info">Configration</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="card ">
                        <div class="card-body">
                            <div class="icon-contain">
                                <div class="row">
                                    <div class="col-2 align-self-center">
                                        <i class="fas fa-database text-gradient-primary"></i>
                                    </div>
                                    <div class="col-10 text-right">
                                        <h5 class="mt-0 mb-1 text-warning">$15562</h5>
                                        <p class="mb-0 font-12 text-info">FAQs</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="card ">
                        <div class="card-body">
                            <div class="icon-contain">
                                <div class="row">
                                    <div class="col-2 align-self-center">
                                        <i class="fas fa-database text-gradient-primary"></i>
                                    </div>
                                    <div class="col-10 text-right">
                                        <h5 class="mt-0 mb-1 text-warning">$15562</h5>
                                        <p class="mb-0 font-12 text-info">Notification Email</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="card ">
                        <div class="card-body">
                            <div class="icon-contain">
                                <div class="row">
                                    <div class="col-2 align-self-center">
                                        <i class="fas fa-database text-gradient-primary"></i>
                                    </div>
                                    <div class="col-10 text-right">
                                        <h5 class="mt-0 mb-1 text-warning">$15562</h5>
                                        <p class="mb-0 font-12 text-info">Static Content</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
