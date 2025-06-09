@extends('Admin.layout')
@section('content')

        <section class="content-main">
            <div class="content-header">
                <div>
                    <h2 class="content-title card-title">Order List </h2>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
                <div>
                    <input type="text" placeholder="Search order ID" class="form-control bg-white">
                </div>
            </div>
            <div class="card mb-4">
                <header class="card-header">
                    <div class="row gx-3">
                        <div class="col-lg-4 col-md-6 me-auto">
                            <input type="text" placeholder="Search..." class="form-control">
                        </div>
                        <div class="col-lg-2 col-6 col-md-3">
                            <select class="form-select">
                                <option>Status</option>
                                <option>Active</option>
                                <option>Disabled</option>
                                <option>Show all</option>
                            </select>
                        </div>
                        <div class="col-lg-2 col-6 col-md-3">
                            <select class="form-select">
                                <option>Show 20</option>
                                <option>Show 30</option>
                                <option>Show 40</option>
                            </select>
                        </div>
                    </div>
                </header>
                <!-- card-header end// -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Date</th>
                                    <th scope="col" class="text-end"> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>0901</td>
                                    <td><b>Marvin McKinney</b></td>
                                    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="325f5340445b5c72574a535f425e571c515d5f">[email&#160;protected]</a></td>
                                    <td>$9.00</td>
                                    <td><span class="badge rounded-pill alert-warning">Pending</span></td>
                                    <td>03.12.2022</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-md rounded font-sm">Detail</a>
                                        <div class="dropdown">
                                            <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">View detail</a>
                                                <a class="dropdown-item" href="#">Edit info</a>
                                                <a class="dropdown-item text-danger" href="#">Delete</a>
                                            </div>
                                        </div>
                                        <!-- dropdown //end -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>2323</td>
                                    <td><b>Leslie Alexander</b></td>
                                    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5b373e2837323e1b3e233a362b373e75383436">[email&#160;protected]</a></td>
                                    <td>$46.61</td>
                                    <td><span class="badge rounded-pill alert-warning">Pending</span></td>
                                    <td>21.02.2022</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-md rounded font-sm">Detail</a>
                                        <div class="dropdown">
                                            <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">View detail</a>
                                                <a class="dropdown-item" href="#">Edit info</a>
                                                <a class="dropdown-item text-danger" href="#">Delete</a>
                                            </div>
                                        </div>
                                        <!-- dropdown //end -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>1233</td>
                                    <td><b>Esther Howard</b></td>
                                    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="395c4a4d515c4b795c41585449555c175a5654">[email&#160;protected]</a></td>
                                    <td>$12.00</td>
                                    <td><span class="badge rounded-pill alert-danger">Canceled</span></td>
                                    <td>03.07.2022</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-md rounded font-sm">Detail</a>
                                        <div class="dropdown">
                                            <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">View detail</a>
                                                <a class="dropdown-item" href="#">Edit info</a>
                                                <a class="dropdown-item text-danger" href="#">Delete</a>
                                            </div>
                                        </div>
                                        <!-- dropdown //end -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>1233</td>
                                    <td><b>Esther Howard</b></td>
                                    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="0b6e787f636e794b6e736a667b676e25686466">[email&#160;protected]</a></td>
                                    <td>$12.00</td>
                                    <td><span class="badge rounded-pill alert-danger">Canceled</span></td>
                                    <td>03.07.2022</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-md rounded font-sm">Detail</a>
                                        <div class="dropdown">
                                            <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">View detail</a>
                                                <a class="dropdown-item" href="#">Edit info</a>
                                                <a class="dropdown-item text-danger" href="#">Delete</a>
                                            </div>
                                        </div>
                                        <!-- dropdown //end -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>2323</td>
                                    <td><b>Jenny Wilson</b></td>
                                    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3d57585353447d58455c504d5158135e5250">[email&#160;protected]</a></td>
                                    <td>$589.99</td>
                                    <td><span class="badge rounded-pill alert-success">Received</span></td>
                                    <td>22.05.2022</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-md rounded font-sm">Detail</a>
                                        <div class="dropdown">
                                            <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">View detail</a>
                                                <a class="dropdown-item" href="#">Edit info</a>
                                                <a class="dropdown-item text-danger" href="#">Delete</a>
                                            </div>
                                        </div>
                                        <!-- dropdown //end -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>2112</td>
                                    <td><b>Marvin McKinney</b></td>
                                    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="eb868a999d8285ab8e938a869b878ec5888486">[email&#160;protected]</a></td>
                                    <td>$16.58</td>
                                    <td><span class="badge rounded-pill alert-success">Received</span></td>
                                    <td>23.04.2022</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-md rounded font-sm">Detail</a>
                                        <div class="dropdown">
                                            <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">View detail</a>
                                                <a class="dropdown-item" href="#">Edit info</a>
                                                <a class="dropdown-item text-danger" href="#">Delete</a>
                                            </div>
                                        </div>
                                        <!-- dropdown //end -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>7897</td>
                                    <td><b>Albert Flores</b></td>
                                    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="72131e1017000632170a131f021e175c111d1f">[email&#160;protected]</a></td>
                                    <td>$10.00</td>
                                    <td><span class="badge rounded-pill alert-success">Received</span></td>
                                    <td>13.03.2022</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-md rounded font-sm">Detail</a>
                                        <div class="dropdown">
                                            <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">View detail</a>
                                                <a class="dropdown-item" href="#">Edit info</a>
                                                <a class="dropdown-item text-danger" href="#">Delete</a>
                                            </div>
                                        </div>
                                        <!-- dropdown //end -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>2323</td>
                                    <td><b>Wade Warren</b></td>
                                    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a9dec8cdcce9ccd1c8c4d9c5cc87cac6c4">[email&#160;protected]</a></td>
                                    <td>$105.55</td>
                                    <td><span class="badge rounded-pill alert-success">Received</span></td>
                                    <td>23.09.2019</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-md rounded font-sm">Detail</a>
                                        <div class="dropdown">
                                            <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">View detail</a>
                                                <a class="dropdown-item" href="#">Edit info</a>
                                                <a class="dropdown-item text-danger" href="#">Delete</a>
                                            </div>
                                        </div>
                                        <!-- dropdown //end -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>2324</td>
                                    <td><b>Jane Cooper</b></td>
                                    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="deb4bfb0bb9ebba6bfb3aeb2bbf0bdb1b3">[email&#160;protected]</a></td>
                                    <td>$710.68</td>
                                    <td><span class="badge rounded-pill alert-success">Received</span></td>
                                    <td>28.04.2022</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-md rounded font-sm">Detail</a>
                                        <div class="dropdown">
                                            <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">View detail</a>
                                                <a class="dropdown-item" href="#">Edit info</a>
                                                <a class="dropdown-item text-danger" href="#">Delete</a>
                                            </div>
                                        </div>
                                        <!-- dropdown //end -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>2325</td>
                                    <td><b>Savannah Nguyen</b></td>
                                    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="89fae8ffe8e7e7e8e1c9ecf1e8e4f9e5eca7eae6e4">[email&#160;protected]</a></td>
                                    <td>$710.68</td>
                                    <td><span class="badge rounded-pill alert-success">Received</span></td>
                                    <td>23.03.2022</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-md rounded font-sm">Detail</a>
                                        <div class="dropdown">
                                            <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">View detail</a>
                                                <a class="dropdown-item" href="#">Edit info</a>
                                                <a class="dropdown-item text-danger" href="#">Delete</a>
                                            </div>
                                        </div>
                                        <!-- dropdown //end -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>2326</td>
                                    <td><b>Guy Hawkins</b></td>
                                    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="096e7c70496c71686479656c276a6664">[email&#160;protected]</a></td>
                                    <td>$767.50</td>
                                    <td><span class="badge rounded-pill alert-success">Received</span></td>
                                    <td>28.04.2022</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-md rounded font-sm">Detail</a>
                                        <div class="dropdown">
                                            <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">View detail</a>
                                                <a class="dropdown-item" href="#">Edit info</a>
                                                <a class="dropdown-item text-danger" href="#">Delete</a>
                                            </div>
                                        </div>
                                        <!-- dropdown //end -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>2327</td>
                                    <td><b>Darrell Steward</b></td>
                                    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="593d382b2b3c35193c21383429353c773a3634">[email&#160;protected]</a></td>
                                    <td>$406.27</td>
                                    <td><span class="badge rounded-pill alert-success">Received</span></td>
                                    <td>14.07.2022</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-md rounded font-sm">Detail</a>
                                        <div class="dropdown">
                                            <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">View detail</a>
                                                <a class="dropdown-item" href="#">Edit info</a>
                                                <a class="dropdown-item text-danger" href="#">Delete</a>
                                            </div>
                                        </div>
                                        <!-- dropdown //end -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>2328</td>
                                    <td><b>Jane Cooper</b></td>
                                    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="385259565d785d40595548545d165b5755">[email&#160;protected]</a></td>
                                    <td>$601.13</td>
                                    <td><span class="badge rounded-pill alert-success">Received</span></td>
                                    <td>18.03.2022</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-md rounded font-sm">Detail</a>
                                        <div class="dropdown">
                                            <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">View detail</a>
                                                <a class="dropdown-item" href="#">Edit info</a>
                                                <a class="dropdown-item text-danger" href="#">Delete</a>
                                            </div>
                                        </div>
                                        <!-- dropdown //end -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>2329</td>
                                    <td><b>Darlene Robertson</b></td>
                                    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="086c6d7a616d666d486d70696578646d266b6765">[email&#160;protected]</a></td>
                                    <td>$948.55</td>
                                    <td><span class="badge rounded-pill alert-success">Received</span></td>
                                    <td>03.07.2022</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-md rounded font-sm">Detail</a>
                                        <div class="dropdown">
                                            <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">View detail</a>
                                                <a class="dropdown-item" href="#">Edit info</a>
                                                <a class="dropdown-item text-danger" href="#">Delete</a>
                                            </div>
                                        </div>
                                        <!-- dropdown //end -->
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- table-responsive //end -->
                </div>
                <!-- card-body end// -->
            </div>
            <!-- card end// -->
            <div class="pagination-area mt-15 mb-50">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-start">
                        <li class="page-item active"><a class="page-link" href="#">01</a></li>
                        <li class="page-item"><a class="page-link" href="#">02</a></li>
                        <li class="page-item"><a class="page-link" href="#">03</a></li>
                        <li class="page-item"><a class="page-link dot" href="#">...</a></li>
                        <li class="page-item"><a class="page-link" href="#">16</a></li>
                        <li class="page-item"><a class="page-link" href="#"><i class="material-icons md-chevron_right"></i></a></li>
                    </ul>
                </nav>
            </div>
        </section>
        <!-- content-main end// -->
       @endsection