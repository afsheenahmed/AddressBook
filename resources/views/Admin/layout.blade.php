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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!-- Template CSS -->
    <link href="Admin/css/main.css" rel="stylesheet" type="text/css" />

    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            font-size: 24px;
            vertical-align: middle;
        }
        .edit-input {
    outline: 2px solid black !important;
    border: none; /* optional: removes default border */
    padding: 4px;  /* optional: adds some space inside */
    border-radius: 4px; /* optional: rounded corners */
}
.edit-input:focus {
    outline: 2px solid black !important;
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
                    <a class="menu-link" href="/admin/new">
                        <span class="material-symbols-outlined icon">stars</span>
                        <span class="text">New</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a class="menu-link" href="page-brands.html">
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

        @yield('content')

        <footer class="main-footer font-xs">
            <div class="row pb-30 pt-15">
                <div class="col-sm-6">
                    <script>document.write(new Date().getFullYear())</script> ©, Evara - HTML Ecommerce Template.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end">All rights reserved</div>
                </div>
            </div>
        </footer>
    </main>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Use Bootstrap 5 Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Other JS (your local files) -->
    <script src="Admin/js/vendors/select2.min.js"></script>
    <script src="Admin/js/vendors/perfect-scrollbar.js"></script>
    <script src="Admin/js/vendors/jquery.fullscreen.min.js"></script>
    <script src="Admin/js/vendors/chart.js"></script>
    <script src="Admin/js/main.js"></script>
    <script src="Admin/js/custom-chart.js"></script>
</body>

</html>
