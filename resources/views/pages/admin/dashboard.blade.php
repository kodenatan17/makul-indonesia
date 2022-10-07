@extends('layouts.admin')

@section('title')
Makul Indonesia Dashboard
@endsection

@section('content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Admin Dashboard</h2>
            <p class="dashboard-subtitle">This is Makul Indonesia Administrator Panel!</p>
            <div class="dashboard-content">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-2">
                            <div class="card-body">
                                <div class="dashboard-card-title">Customer</div>
                                <div class="dashboard-card-subtitle">{{ $customer }} <span class=" ml-2 dashboard-card-title"> Customers </span> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-2">
                            <div class="card-body">
                                <div class="dashboard-card-title">Revenue</div>
                                <div class="dashboard-card-subtitle">RP. {{ $revenue }} <span class=" ml-2 dashboard-card-title"> Revenue </span> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-2">
                            <div class="card-body">
                                <div class="dashboard-card-title">Transaction</div>
                                <div class="dashboard-card-subtitle">{{ $transaction }} <span class=" ml-2 dashboard-card-title"> Transactions </span> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="row mt-3">
                    <div class="col-12 mt-2">
                        <h5 class="mb-3">Recent Transactions</h5>
                        <a href="/dashboard-transactions-details.html" class="card card-list d-block">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-1">
                                        <img src="/images/dashboard-image1.png" alt="" />
                                    </div>
                                    <div class="col-md-4">Boba Milk Tea</div>
                                    <div class="col-md-3">Rendy Widagdo</div>
                                    <div class="col-md-3">03 September, 2022</div>
                                    <div class="col-md-1 d-none d-md-block">
                                        <img src="/images/dashboard-arrow.svg" alt="" />
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="/dashboard-transactions-details.html" class="card card-list d-block">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-1">
                                        <img src="/images/dashboard-image1.png" alt="" />
                                    </div>
                                    <div class="col-md-4">Boba Milk Tea</div>
                                    <div class="col-md-3">Rendi Widagdo</div>
                                    <div class="col-md-3">03 September, 2022</div>
                                    <div class="col-md-1 d-none d-md-block">
                                        <img src="/images/dashboard-arrow.svg" alt="" />
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="/dashboard-transactions-details.html" class="card card-list d-block">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-1">
                                        <img src="/images/dashboard-image1.png" alt="" />
                                    </div>
                                    <div class="col-md-4">Boba Milk Tea</div>
                                    <div class="col-md-3">Rendi Widagdo</div>
                                    <div class="col-md-3">03 September, 2022</div>
                                    <div class="col-md-1 d-none d-md-block">
                                        <img src="/images/dashboard-arrow.svg" alt="" />
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>
@endsection