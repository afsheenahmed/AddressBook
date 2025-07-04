<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Evara Dashboard</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="Admin/imgs/theme/favicon.svg">

    <!-- Material Symbols Outlined -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />

    <!-- Template CSS -->
    <link href="Admin/css/main.css" rel="stylesheet" type="text/css" />

    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            font-size: 24px;
            vertical-align: middle;
        }
    </style>
</head>

<body>
    <aside class="navbar-aside" id="offcanvas_aside">
        <div class="aside-top">
            <a href="index.html" class="brand-wrap">
                <img src="Admin/imgs/theme/logo.svg" class="logo" alt="Evara Dashboard">
            </a>
            <div>
                <button class="btn btn-icon btn-aside-minimize">
                    <span class="material-symbols-outlined text-muted">menu_open</span>
                </button>
            </div>
        </div>
        <nav>
            <ul class="menu-aside">
                <li class="menu-item active">
                    <a class="menu-link" href="/admindashboard">
                        <span class="material-symbols-outlined icon">home</span>
                        <span class="text">Dashboard</span>
                    </a>
                </li>
                <li class="menu-item has-submenu">
                    <a class="menu-link" href="/viewproducts">
                        <span class="material-symbols-outlined icon">shopping_bag</span>
                        <span class="text">Products</span>
                    </a>
                    <div class="submenu">
                          <a href="/uploadproducts">Upload Products</a>
                        <a href="/viewproduct">Manage Products</a>
                      
                    </div>
                </li>
                <li class="menu-item has-submenu">
                    <a class="menu-link" href="page-orders-1.html">
                        <span class="material-symbols-outlined icon">shopping_cart</span>
                        <span class="text">Orders</span>
                    </a>
                    <div class="submenu">
                        <a href="/userorder">User Order </a>
                       
                        <a href="/orderdetails">Order Details</a>
                        <a href="/ordertracking">Order tracking</a>
                        <a href="/invoice">Invoice</a>
                    </div>
                </li>
                 <li class="menu-item">
                    <a class="menu-link"  href="/viewvendors">
                        <span class="material-symbols-outlined icon">store</span>
                        <span class="text">View Vendors</span>
                    </a>
                </li>

                 <li class="menu-item">
                    <a class="menu-link"  href="/viewusers">
                        <span class="material-symbols-outlined icon">person</span>
                        <span class="text">View Users</span>
                    </a>
                </li>
                
                <li class="menu-item has-submenu">
                    <a class="menu-link" href="page-transactions-1.html">
                        <span class="material-symbols-outlined icon">monetization_on</span>
                        <span class="text">Transactions</span>
                    </a>
                </li>
                <li class="menu-item has-submenu">
                    <a class="menu-link" href="#">
                        <span class="material-symbols-outlined icon">person</span>
                        <span class="text">Account</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a class="menu-link" href="page-reviews.html">
                        <span class="material-symbols-outlined icon">stars</span>
                        <span class="text">Reviews</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a class="menu-link"  href="viewcontact"> <i class="icon material-icons md-pie_chart"></i>
                        <span class="text">Contact</span>
                    </a>    
                </li>
                <li class="menu-item">
                    <a class="menu-link" href="viewcontact">
                        <span class="material-symbols-outlined icon">message</span>
                        <span class="text">Customer Inquiries</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a class="menu-link" disabled href="#">
                        <span class="material-symbols-outlined icon">pie_chart</span>
                        <span class="text">Statistics</span>
                    </a>
                </li>
            </ul>
        </nav>
    </aside>

    <main class="main-wrap">
        <header class="main-header navbar">
            <div class="col-search">
                <form class="searchform">
                    <div class="input-group">
                        <input list="search_terms" type="text" class="form-control" placeholder="Search term">
                        <button class="btn btn-light bg" type="button">
                            <span class="material-symbols-outlined">search</span>
                        </button>
                    </div>
                    <datalist id="search_terms">
                        <option value="Products">
                        <option value="New orders">
                        <option value="Apple iphone">
                        <option value="Ahmed Hassan">
                    </datalist>
                </form>
            </div>

            <div class="col-nav">
                <button class="btn btn-icon btn-mobile me-auto" data-trigger="#offcanvas_aside">
                    <span class="material-symbols-outlined">apps</span>
                </button>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link btn-icon" href="#">
                            <span class="material-symbols-outlined">notifications</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn-icon darkmode" href="#">
                            <span class="material-symbols-outlined">nights_stay</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="requestfullscreen nav-link btn-icon">
                            <span class="material-symbols-outlined">cast</span>
                        </a>
                    </li>

                    <!-- Language Dropdown -->
                    <li class="dropdown nav-item">
                        <a class="dropdown-toggle nav-link btn-icon" href="#" id="dropdownLanguage" data-bs-toggle="dropdown">
                            <span class="material-symbols-outlined">public</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownLanguage">
                            <li><a class="dropdown-item" href="#">English</a></li>
                            <li><a class="dropdown-item" href="#">French</a></li>
                            <li><a class="dropdown-item" href="#">Arabic</a></li>
                        </ul>
                    </li>

                    <!-- Account Dropdown -->
                    <li class="dropdown nav-item">
                        <a class="dropdown-toggle nav-link btn-icon" href="#" id="dropdownAccount" data-bs-toggle="dropdown">
                            <img class="img-xs rounded-circle" src="Admin/imgs/people/avatar2.jpg" alt="User">
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownAccount">
                            <li><a class="dropdown-item" href="#">My Profile</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </header>
        <section class="content-main">
            <div class="content-header">
                <div>
                    <h2 class="content-title card-title">Dashboard </h2>
                    <p>Whole data about your business here</p>
                </div>
                <div>
                    <a href="#" class="btn btn-primary"><i class="text-muted material-icons md-post_add"></i>Create report</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="card card-body mb-4">
                        <article class="icontext">
                            <span class="icon icon-sm rounded-circle bg-primary-light"><i class="text-primary material-icons md-monetization_on"></i></span>
                            <div class="text">
                                <h6 class="mb-1 card-title">Revenue</h6>
                                <span>$13,456.5</span>
                                <span class="text-sm">
                                    Shipping fees are not included
                                </span>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card card-body mb-4">
                        <article class="icontext">
                            <span class="icon icon-sm rounded-circle bg-success-light"><i class="text-success material-icons md-local_shipping"></i></span>
                            <div class="text">
                                <h6 class="mb-1 card-title">Orders</h6> <span>53.668</span>
                                <span class="text-sm">
                                    Excluding orders in transit
                                </span>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card card-body mb-4">
                        <article class="icontext">
                            <span class="icon icon-sm rounded-circle bg-warning-light"><i class="text-warning material-icons md-qr_code"></i></span>
                            <div class="text">
                                <h6 class="mb-1 card-title">Products</h6> <span>9.856</span>
                                <span class="text-sm">
                                    In 19 Categories
                                </span>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card card-body mb-4">
                        <article class="icontext">
                            <span class="icon icon-sm rounded-circle bg-info-light"><i class="text-info material-icons md-shopping_basket"></i></span>
                            <div class="text">
                                <h6 class="mb-1 card-title">Monthly Earning</h6> <span>$6,982</span>
                                <span class="text-sm">
                                    Based in your local time.
                                </span>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-8 col-lg-12">
                    <div class="card mb-4">
                        <article class="card-body">
                            <h5 class="card-title">Sale statistics</h5>
                            <canvas id="myChart" height="120px"></canvas>
                        </article>
                    </div>
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="card mb-4">
                                <article class="card-body">
                                    <h5 class="card-title">New Members</h5>
                                    <div class="new-member-list">
                                        <div class="d-flex align-items-center justify-content-between mb-4">
                                            <div class="d-flex align-items-center">
                                                <img src="Admin/imgs/people/avatar4.jpg" alt="" class="avatar">
                                                <div>
                                                    <h6>Patric Adams</h6>
                                                    <p class="text-muted font-xs">
                                                        Sanfrancisco
                                                    </p>
                                                </div>
                                            </div>
                                            <a href="#" class="btn btn-xs"><i class="material-icons md-add"></i> Add</a>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mb-4">
                                            <div class="d-flex align-items-center">
                                                <img src="Admin/imgs/people/avatar2.jpg" alt="" class="avatar">
                                                <div>
                                                    <h6>Dilan Specter</h6>
                                                    <p class="text-muted font-xs">
                                                        Sanfrancisco
                                                    </p>
                                                </div>
                                            </div>
                                            <a href="#" class="btn btn-xs"><i class="material-icons md-add"></i> Add</a>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mb-4">
                                            <div class="d-flex align-items-center">
                                                <img src="Admin/imgs/people/avatar3.jpg" alt="" class="avatar">
                                                <div>
                                                    <h6>Tomas Baker</h6>
                                                    <p class="text-muted font-xs">
                                                        Sanfrancisco
                                                    </p>
                                                </div>
                                            </div>
                                            <a href="#" class="btn btn-xs"><i class="material-icons md-add"></i> Add</a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="card mb-4">
                                <article class="card-body">
                                    <h5 class="card-title">Recent activities</h5>
                                    <ul class="verti-timeline list-unstyled font-sm">
                                        <li class="event-list">
                                            <div class="event-timeline-dot">
                                                <i class="material-icons md-play_circle_outline font-xxl"></i>
                                            </div>
                                            <div class="media">
                                                <div class="me-3">
                                                    <h6><span>Today</span> <i class="material-icons md-trending_flat text-brand ml-15 d-inline-block"></i></h6>
                                                </div>
                                                <div class="media-body">
                                                    <div>
                                                        Lorem ipsum dolor sit amet consectetur
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="event-list active">
                                            <div class="event-timeline-dot">
                                                <i class="material-icons md-play_circle_outline font-xxl animation-fade-right"></i>
                                            </div>
                                            <div class="media">
                                                <div class="me-3">
                                                    <h6><span>17 May</span> <i class="material-icons md-trending_flat text-brand ml-15 d-inline-block"></i></h6>
                                                </div>
                                                <div class="media-body">
                                                    <div>
                                                        Debitis nesciunt voluptatum dicta reprehenderit
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="event-list">
                                            <div class="event-timeline-dot">
                                                <i class="material-icons md-play_circle_outline font-xxl"></i>
                                            </div>
                                            <div class="media">
                                                <div class="me-3">
                                                    <h6><span>13 May</span> <i class="material-icons md-trending_flat text-brand ml-15 d-inline-block"></i></h6>
                                                </div>
                                                <div class="media-body">
                                                    <div>
                                                        Accusamus voluptatibus voluptas.
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="event-list">
                                            <div class="event-timeline-dot">
                                                <i class="material-icons md-play_circle_outline font-xxl"></i>
                                            </div>
                                            <div class="media">
                                                <div class="me-3">
                                                    <h6><span>05 April</span> <i class="material-icons md-trending_flat text-brand ml-15 d-inline-block"></i></h6>
                                                </div>
                                                <div class="media-body">
                                                    <div>
                                                        At vero eos et accusamus et iusto odio dignissi
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="event-list">
                                            <div class="event-timeline-dot">
                                                <i class="material-icons md-play_circle_outline font-xxl"></i>
                                            </div>
                                            <div class="media">
                                                <div class="me-3">
                                                    <h6><span>26 Mar</span> <i class="material-icons md-trending_flat text-brand ml-15 d-inline-block"></i></h6>
                                                </div>
                                                <div class="media-body">
                                                    <div>
                                                        Responded to need “Volunteer Activities
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12">
                    <div class="card mb-4">
                        <article class="card-body">
                            <h5 class="card-title">Revenue Base on Area</h5>
                            <canvas id="myChart2" height="217"></canvas>
                        </article>
                    </div>
                    <div class="card mb-4">
                        <article class="card-body">
                            <h5 class="card-title">Marketing Chanel</h5>
                            <span class="text-muted font-xs">Facebook</span>
                            <div class="progress mb-3">
                                <div class="progress-bar" role="progressbar" style="width: 15%">15%</div>
                            </div>
                            <span class="text-muted font-xs">Instagram</span>
                            <div class="progress mb-3">
                                <div class="progress-bar" role="progressbar" style="width: 65%">65% </div>
                            </div>
                            <span class="text-muted font-xs">Google</span>
                            <div class="progress mb-3">
                                <div class="progress-bar" role="progressbar" style="width: 51%"> 51% </div>
                            </div>
                            <span class="text-muted font-xs">Twitter</span>
                            <div class="progress mb-3">
                                <div class="progress-bar" role="progressbar" style="width: 80%"> 80%</div>
                            </div>
                            <span class="text-muted font-xs">Other</span>
                            <div class="progress mb-3">
                                <div class="progress-bar" role="progressbar" style="width: 80%"> 80%</div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <header class="card-header">
                    <h4 class="card-title">Latest orders</h4>
                    <div class="row align-items-center">
                        <div class="col-md-3 col-12 me-auto mb-md-0 mb-3">
                            <div class="custom_select">
                                <select class="form-select select-nice">
                                    <option selected>All Categories</option>
                                    <option>Women's Clothing</option>
                                    <option>Men's Clothing</option>
                                    <option>Cellphones</option>
                                    <option>Computer & Office</option>
                                    <option>Consumer Electronics</option>
                                    <option>Jewelry & Accessories</option>
                                    <option>Home & Garden</option>
                                    <option>Luggage & Bags</option>
                                    <option>Shoes</option>
                                    <option>Mother & Kids</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2 col-6">
                            <input type="date" value="02.05.2022" class="form-control">
                        </div>
                        <div class="col-md-2 col-6">
                            <div class="custom_select">
                                <select class="form-select select-nice">
                                    <option selected>Status</option>
                                    <option>All</option>
                                    <option>Paid</option>
                                    <option>Chargeback</option>
                                    <option>Refund</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </header>
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="table-responsive">
                            <table class="table align-middle table-nowrap mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col" class="text-center">
                                            <div class="form-check align-middle">
                                                <input class="form-check-input" type="checkbox" id="transactionCheck01">
                                                <label class="form-check-label" for="transactionCheck01"></label>
                                            </div>
                                        </th>
                                        <th class="align-middle" scope="col">Order ID</th>
                                        <th class="align-middle" scope="col">Billing Name</th>
                                        <th class="align-middle" scope="col">Date</th>
                                        <th class="align-middle" scope="col">Total</th>
                                        <th class="align-middle" scope="col">Payment Status</th>
                                        <th class="align-middle" scope="col">Payment Method</th>
                                        <th class="align-middle" scope="col">View Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="transactionCheck02">
                                                <label class="form-check-label" for="transactionCheck02"></label>
                                            </div>
                                        </td>
                                        <td><a href="#" class="fw-bold">#SK2540</a> </td>
                                        <td>Neal Matthews</td>
                                        <td>
                                            07 Oct, 2022
                                        </td>
                                        <td>
                                            $400
                                        </td>
                                        <td>
                                            <span class="badge badge-pill badge-soft-success">Paid</span>
                                        </td>
                                        <td>
                                            <i class="material-icons md-payment font-xxl text-muted mr-5"></i> Mastercard
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-xs"> View details</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="transactionCheck03">
                                                <label class="form-check-label" for="transactionCheck03"></label>
                                            </div>
                                        </td>
                                        <td><a href="#" class="fw-bold">#SK2541</a> </td>
                                        <td>Jamal Burnett</td>
                                        <td>
                                            07 Oct, 2022
                                        </td>
                                        <td>
                                            $380
                                        </td>
                                        <td>
                                            <span class="badge badge-pill badge-soft-danger">Chargeback</span>
                                        </td>
                                        <td>
                                            <i class="material-icons md-payment font-xxl text-muted mr-5"></i> Visa
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-xs"> View details</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="transactionCheck04">
                                                <label class="form-check-label" for="transactionCheck04"></label>
                                            </div>
                                        </td>
                                        <td><a href="#" class="fw-bold">#SK2542</a> </td>
                                        <td>Juan Mitchell</td>
                                        <td>
                                            06 Oct, 2022
                                        </td>
                                        <td>
                                            $384
                                        </td>
                                        <td>
                                            <span class="badge badge-pill badge-soft-success">Paid</span>
                                        </td>
                                        <td>
                                            <i class="material-icons md-payment font-xxl text-muted mr-5"></i> Paypal
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-xs"> View details</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="transactionCheck05">
                                                <label class="form-check-label" for="transactionCheck05"></label>
                                            </div>
                                        </td>
                                        <td><a href="#" class="fw-bold">#SK2543</a> </td>
                                        <td>Barry Dick</td>
                                        <td>
                                            05 Oct, 2022
                                        </td>
                                        <td>
                                            $412
                                        </td>
                                        <td>
                                            <span class="badge badge-pill badge-soft-success">Paid</span>
                                        </td>
                                        <td>
                                            <i class="material-icons md-payment font-xxl text-muted mr-5"></i> Mastercard
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-xs"> View details</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="transactionCheck06">
                                                <label class="form-check-label" for="transactionCheck06"></label>
                                            </div>
                                        </td>
                                        <td><a href="#" class="fw-bold">#SK2544</a> </td>
                                        <td>Ronald Taylor</td>
                                        <td>
                                            04 Oct, 2022
                                        </td>
                                        <td>
                                            $404
                                        </td>
                                        <td>
                                            <span class="badge badge-pill badge-soft-warning">Refund</span>
                                        </td>
                                        <td>
                                            <i class="material-icons md-payment font-xxl text-muted mr-5"></i> Visa
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-xs"> View details</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="transactionCheck07">
                                                <label class="form-check-label" for="transactionCheck07"></label>
                                            </div>
                                        </td>
                                        <td><a href="#" class="fw-bold">#SK2545</a> </td>
                                        <td>Jacob Hunter</td>
                                        <td>
                                            04 Oct, 2022
                                        </td>
                                        <td>
                                            $392
                                        </td>
                                        <td>
                                            <span class="badge badge-pill badge-soft-success">Paid</span>
                                        </td>
                                        <td>
                                            <i class="material-icons md-payment font-xxl text-muted mr-5"></i> Paypal
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-xs"> View details</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- table-responsive end// -->
                </div>
            </div>
            <div class="pagination-area mt-30 mb-50">
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
        <footer class="main-footer font-xs">
            <div class="row pb-30 pt-15">
                <div class="col-sm-6">
                    <script>
                        document.write(new Date().getFullYear())
                    </script> ©, Evara - HTML Ecommerce Template .
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end">
                        All rights reserved
                    </div>
                </div>
            </div>
        </footer>
    </main>
    <script src="Admin/js/vendors/jquery-3.6.0.min.js"></script>
    <script src="Admin/js/vendors/bootstrap.bundle.min.js"></script>
    <script src="Admin/js/vendors/select2.min.js"></script>
    <script src="Admin/js/vendors/perfect-scrollbar.js"></script>
    <script src="Admin/js/vendors/jquery.fullscreen.min.js"></script>
    <script src="Admin/js/vendors/chart.js"></script>
    <!-- Main Script -->
    <script src="Admin/js/main.js" type="text/javascript"></script>
    <script src="Admin/js/custom-chart.js" type="text/javascript"></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"9497b8452f322097","version":"2025.5.0","r":1,"token":"3aa9a3481f734e94bceb8bb1bd648ba1","serverTiming":{"name":{"cfExtPri":true,"cfEdge":true,"cfOrigin":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}}}'
        crossorigin="anonymous"></script>
</body>

</html>