@extends('Admin.layout')
@section('content')
        <section class="content-main">
            <div class="content-header">
                <div>
                    <h2 class="content-title card-title">Order Tracking</h2>
                    <p>Details for Order ID: 3453012</p>
                </div>
            </div>
            <div class="card">
                <header class="card-header">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6 mb-lg-0 mb-15">
                            <span>
                                <i class="material-icons md-calendar_today"></i> <b>Wed, Aug 13, 2022, 4:34PM</b>
                            </span> <br>
                            <small class="text-muted">Order ID: 3453012</small> <br>
                            <small class="text-muted">Your order has been delivered</small>
                        </div>
                        <div class="col-lg-6 col-md-6 ms-auto text-md-end">
                            <select class="form-select d-inline-block mb-lg-0 mb-15 mw-200 mr-15">
                                <option>Change status</option>
                                <option>Awaiting payment</option>
                                <option>Confirmed</option>
                                <option>Shipped</option>
                                <option>Delivered</option>
                            </select>
                            <a class="btn btn-primary" href="#">Screenshot</a>
                            <a class="btn btn-secondary print ms-2" href="#"><i class="icon material-icons md-print mr-5"></i>Print</a>
                        </div>
                    </div>
                </header>
                <!-- card-header end// -->
                <div class="card-body">
                    <div class="order-tracking mb-100">
                        <div class="steps d-flex flex-wrap flex-sm-nowrap justify-content-between">
                            <div class="step completed">
                                <div class="step-icon-wrap">
                                    <div class="step-icon"><i class="material-icons md-shopping_cart"></i></div>
                                </div>
                                <h4 class="step-title">Confirmed Order</h4>
                                <small class="text-muted text-sm">15 March 2022</small>
                            </div>
                            <div class="step completed">
                                <div class="step-icon-wrap">
                                    <div class="step-icon"><i class="material-icons md-settings"></i></div>
                                </div>
                                <h4 class="step-title">Processing Order</h4>
                                <small class="text-muted text-sm">16 March 2022</small>
                            </div>
                            <div class="step completed">
                                <div class="step-icon-wrap">
                                    <div class="step-icon"><i class="material-icons md-shopping_bag"></i></div>
                                </div>
                                <h4 class="step-title">Quality Check</h4>
                                <small class="text-muted text-sm">17 March 2022</small>
                            </div>
                            <div class="step">
                                <div class="step-icon-wrap">
                                    <div class="step-icon"><i class="material-icons md-local_shipping"></i></div>
                                </div>
                                <h4 class="step-title">Product Dispatched</h4>
                                <small class="text-muted text-sm">18 March 2022</small>
                            </div>
                            <div class="step">
                                <div class="step-icon-wrap">
                                    <div class="step-icon"><i class="material-icons md-check_circle"></i></div>
                                </div>
                                <h4 class="step-title">Product Delivered</h4>
                                <small class="text-muted text-sm">20 March 2022</small>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-50 mt-20 order-info-wrap text-center">
                        <div class="col-md-4">
                            <article class="icontext align-items-start">
                                <div class="text">
                                    <h6 class="mb-1">Customer</h6>
                                    <p class="mb-1">
                                        John Alexander <br> <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="741518110c34110c15190418115a171b19">[email&#160;protected]</a> <br> +998 99 22123456
                                    </p>
                                    <a href="#">View profile</a>
                                </div>
                            </article>
                        </div>
                        <!-- col// -->
                        <div class="col-md-4">
                            <article class="icontext align-items-start">
                                <div class="text">
                                    <h6 class="mb-1">Order info</h6>
                                    <p class="mb-1">
                                        Shipping: Fargo express <br> Pay method: card <br> Status: new
                                    </p>
                                    <a href="#">Download info</a>
                                </div>
                            </article>
                        </div>
                        <!-- col// -->
                        <div class="col-md-4">
                            <article class="icontext align-items-start">
                                <div class="text">
                                    <h6 class="mb-1">Deliver to</h6>
                                    <p class="mb-1">
                                        City: Tashkent, Uzbekistan <br>Block A, House 123, Floor 2 <br> Po Box 10000
                                    </p>
                                    <a href="#">View profile</a>
                                </div>
                            </article>
                        </div>
                        <!-- col// -->
                    </div>
                    <!-- row // -->
                    <div class="row">
                        <div class="text-center mt-100 mb-50">
                            <a class="btn btn-primary" href="page-orders-detail.html">View Order Details</a>
                        </div>
                    </div>
                </div>
                <!-- card end// -->
        </section>
        <!-- content-main end// -->
       @endsection