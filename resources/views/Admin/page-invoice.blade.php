@extends('Admin.layout')
@section('content')
        <section class="content-main">
            <div class="content-header">
                <div>
                    <h2 class="content-title card-title">Invoice</h2>
                    <p>Details for Order ID: 3453012</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="card">
                        <header class="card-header">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6 mb-lg-0 mb-15">
                                    <span>
                                        <i class="material-icons md-calendar_today"></i> <b>Wed, Aug 13, 2022, 4:34PM</b>
                                    </span> <br>
                                    <small class="text-muted">Order ID: 3453012</small>
                                </div>
                                <div class="col-lg-6 col-md-6 ms-auto text-md-end">
                                    <a class="btn btn-primary" href="#"> <i class="icon material-icons md-cloud_download mr-5"></i>Save PDF</a>
                                    <a class="btn btn-secondary print ms-2" href="#"><i class="icon material-icons md-print mr-5"></i>Print</a>
                                </div>
                            </div>
                        </header>
                        <!-- card-header end// -->
                        <div class="card-body">
                            <div class="receipt-content">
                                <div class="container bootstrap snippets bootdey">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="invoice-wrapper">
                                                <div class="intro">
                                                    Hi <strong>Steven Jobs</strong>,
                                                    <br> This is the receipt for a payment of <strong>$312.00</strong> (USD) for your works
                                                </div>

                                                <div class="payment-info">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <span>Payment No.</span>
                                                            <strong>434334343</strong>
                                                        </div>
                                                        <div class="col-sm-6 text-end">
                                                            <span>Payment Date</span>
                                                            <strong>Jul 09, 2022 - 12:20 pm</strong>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="payment-details">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <span>Client</span>
                                                            <strong>
                                                                Andres felipe posada
                                                            </strong>
                                                            <p>
                                                                989 5th Avenue <br> City of monterrey <br> 55839 <br> USA <br>
                                                                <a href="#">
                                                                    <span class="__cf_email__" data-cfemail="046e6b6a6a7d60616262446369656d682a676b69">[email&#160;protected]</span>
                                                                </a>
                                                            </p>
                                                        </div>
                                                        <div class="col-sm-6 text-end">
                                                            <span>Payment To</span>
                                                            <strong>
                                                                Juan fernando arias
                                                            </strong>
                                                            <p>
                                                                344 9th Avenue <br> San Francisco <br> 99383 <br> USA <br>
                                                                <a href="#">
                                                                    <span class="__cf_email__" data-cfemail="620817030c04071022050f030b0e4c010d0f">[email&#160;protected]</span>
                                                                </a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="line-items">
                                                    <div class="headers clearfix">
                                                        <div class="row">
                                                            <div class="col-md-4">Description</div>
                                                            <div class="col-md-3">Quantity</div>
                                                            <div class="col-md-5 text-end">Amount</div>
                                                        </div>
                                                    </div>
                                                    <div class="items">
                                                        <div class="row item">
                                                            <div class="col-md-4 desc">
                                                                T-shirt blue, XXL size
                                                            </div>
                                                            <div class="col-md-3 qty">
                                                                3
                                                            </div>
                                                            <div class="col-md-5 amount text-end">
                                                                $60.00
                                                            </div>
                                                        </div>
                                                        <div class="row item">
                                                            <div class="col-md-4 desc">
                                                                Winter jacket for men
                                                            </div>
                                                            <div class="col-md-3 qty">
                                                                1
                                                            </div>
                                                            <div class="col-md-5 amount text-end">
                                                                $20.00
                                                            </div>
                                                        </div>
                                                        <div class="row item">
                                                            <div class="col-md-4 desc">
                                                                Jeans wear for men
                                                            </div>
                                                            <div class="col-md-3 qty">
                                                                2
                                                            </div>
                                                            <div class="col-md-5 amount text-end">
                                                                $18.00
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="total text-end">
                                                        <p class="extra-notes">
                                                            <strong>Extra Notes</strong> Please send all items at the same time to shipping address by next week. Thanks a lot.
                                                        </p>
                                                        <div class="field">
                                                            Subtotal <span>$379.00</span>
                                                        </div>
                                                        <div class="field">
                                                            Shipping <span>$0.00</span>
                                                        </div>
                                                        <div class="field">
                                                            Discount <span>4.5%</span>
                                                        </div>
                                                        <div class="field grand-total">
                                                            Total <span>$312.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="footer">
                                                Copyright © 2022. company name
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card-body end// -->
                    </div>
                    <!-- card end// -->
                </div>
            </div>
        </section>
        <!-- content-main end// -->
       @endsection