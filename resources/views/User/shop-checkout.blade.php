@extends('User.layout')
@section('content')

<body><style>
    /* Hero Slider Image Responsiveness */
    .home-slider {
        position: relative;
        overflow: hidden;
    }
    
    .single-hero-slider {
        width: 100%;
    }
    
    .single-slider-img {
        position: relative;
        width: 100%;
        height: 0;
        padding-bottom: 50%; /* Adjust this percentage based on your desired aspect ratio */
        overflow: hidden;
    }
    
    .single-slider-img img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
    }
    
    /* Responsive adjustments */
    @media (max-width: 1199px) {
        .single-slider-img {
            padding-bottom: 60%; /* Taller aspect ratio on smaller screens */
        }
    }
    
    @media (max-width: 991px) {
        .single-slider-img {
            padding-bottom: 70%;
        }
        
        .hero-slider-content-2 {
            padding: 20px;
        }
    }
    
    @media (max-width: 767px) {
        .single-slider-img {
            padding-bottom: 80%;
        }
        
        .slider-animated-1 {
            flex-direction: column;
        }
        
        .hero-slider-content-2 {
            text-align: center;
            padding: 15px;
        }
        
        .col-lg-7.col-md-6.col-sm-12 {
            order: -1; /* Image first on mobile */
        }
    }
    
    @media (max-width: 575px) {
        .single-slider-img {
            padding-bottom: 100%; /* Square aspect ratio on very small screens */
        }
    }
    /* Ensure content shows on all screen sizes */
@media (max-width: 768px) {
    .hero-slider-content-2 {
        display: block !important;
        opacity: 1 !important;
        visibility: visible !important;
    }
    
    .slider-animated-1 .col-lg-5 {
        order: 2; /* Content below image on mobile */
    }
    
    .slider-animated-1 .col-lg-7 {
        order: 1; /* Image above content on mobile */
    }
}
</style>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow">Home</a>
                    <span></span> Shop
                    <span></span> Checkout
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-sm-15">
                        <div class="toggle_info">
                            <span><i class="fi-rs-user mr-10"></i><span class="text-muted">Already have an account?</span> <a href="#loginform" data-bs-toggle="collapse" class="collapsed" aria-expanded="false">Click here to login</a></span>
                        </div>
                        <div class="panel-collapse collapse login_form" id="loginform">
                            <div class="panel-body">
                                <p class="mb-30 font-sm">If you have shopped with us before, please enter your details below. If you are a new customer, please proceed to the Billing &amp; Shipping section.</p>
                                <form method="post">
                                    <div class="form-group">
                                        <input type="text" name="email" placeholder="Username Or Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" placeholder="Password">
                                    </div>
                                    <div class="login_footer form-group">
                                        <div class="chek-form">
                                            <div class="custome-checkbox">
                                                <input class="form-check-input" type="checkbox" name="checkbox" id="remember" value="">
                                                <label class="form-check-label" for="remember"><span>Remember me</span></label>
                                            </div>
                                        </div>
                                        <a href="#">Forgot password?</a>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-md" name="login">Log in</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="toggle_info">
                            <span><i class="fi-rs-label mr-10"></i><span class="text-muted">Have a coupon?</span> <a href="#coupon" data-bs-toggle="collapse" class="collapsed" aria-expanded="false">Click here to enter your code</a></span>
                        </div>
                        <div class="panel-collapse collapse coupon_form " id="coupon">
                            <div class="panel-body">
                                <p class="mb-30 font-sm">If you have a coupon code, please apply it below.</p>
                                <form method="post">
                                    <div class="form-group">
                                        <input type="text" placeholder="Enter Coupon Code...">
                                    </div>
                                    <div class="form-group">
                                        <button class="btn  btn-md" name="login">Apply Coupon</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="divider mt-50 mb-50"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-25">
                            <h4>Billing Details</h4>
                        </div>
                        <form method="post">
                            <div class="form-group">
                                <input type="text" required="" name="fname" placeholder="Name *">
                            </div>
                            <div class="form-group">
                                <input type="email" required="" name="lname" placeholder="Email *">
                            </div>
                            <div class="form-group">
                                <input required="" type="text" name="cname" placeholder="Address">
                            </div>
                               <div class="form-group">
                                <input required="" type="text" name="dob" placeholder="Date Of Birth *">
                            </div>
                            
                            <div class="form-group">
                                <input required="" type="text" name="city" placeholder="City / Town *">
                            </div>
                            <div class="form-group">
                                <input required="" type="text" name="state" placeholder="State / Country *">
                            </div>
                            <div class="form-group">
                                <input required="" type="text" name="zipcode" placeholder="Postcode / ZIP *">
                            </div>
                            <div class="form-group">
                                <input required="" type="number" name="phone" placeholder="Phone *">
                            </div>
                             <div class="form-group">
                                <input required="" type="number" name="wphone" placeholder="WorkPhone *">
                            </div>
                            <div class="form-group">
                                <div class="custom_select">
                                    <select class="form-control select-active">
                                        <option value="">Category</option>
                                        <option value="AX">Aland Islands</option>
                                        <option value="AF">Afghanistan</option>
                                        <option value="AL">Albania</option>
                                
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <input required="" type="text" name="remarks" placeholder="Remarks *">
                            </div>
                            <div class="form-group">
                                <div class="checkbox">
                                    <div class="custome-checkbox">
                                        <input class="form-check-input" type="checkbox" name="checkbox" id="createaccount">
                                        <label class="form-check-label label_info" data-bs-toggle="collapse" href="#collapsePassword" data-target="#collapsePassword" aria-controls="collapsePassword" for="createaccount"><span>Create an account?</span></label>
                                    </div>
                                </div>
                            </div>
                            <div id="collapsePassword" class="form-group create-account collapse in">
                                <input required="" type="password" placeholder="Password" name="password">
                            </div>
                            <div class="ship_detail">
                                <div class="form-group">
                                    <div class="chek-form">
                                        <div class="custome-checkbox">
                                            <input class="form-check-input" type="checkbox" name="checkbox" id="differentaddress">
                                            <label class="form-check-label label_info" data-bs-toggle="collapse" data-target="#collapseAddress" href="#collapseAddress" aria-controls="collapseAddress" for="differentaddress"><span>Ship to a different address?</span></label>
                                        </div>
                                    </div>
                                </div>
                                <div id="collapseAddress" class="different_address collapse in">
                                    <div class="form-group">
                                        <input type="text" required="" name="fname" placeholder="First name *">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" required="" name="lname" placeholder="Last name *">
                                    </div>
                                    <div class="form-group">
                                        <input required="" type="text" name="cname" placeholder="Company Name">
                                    </div>
                                    <div class="form-group">
                                        <div class="custom_select">
                                            <select class="form-control select-active">
                                                <option value="">Select an option...</option>
                                                <option value="AX">Aland Islands</option>
                                               
                                             
                                                
                                               
                                       
                                               
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="billing_address" required="" placeholder="Address *">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="billing_address2" required="" placeholder="Address line2">
                                    </div>
                                    <div class="form-group">
                                        <input required="" type="text" name="city" placeholder="City / Town *">
                                    </div>
                                    <div class="form-group">
                                        <input required="" type="text" name="state" placeholder="State / County *">
                                    </div>
                                    <div class="form-group">
                                        <input required="" type="text" name="zipcode" placeholder="Postcode / ZIP *">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-20">
                                <h5>Additional information</h5>
                            </div>
                            <div class="form-group mb-30">
                                <textarea rows="5" placeholder="Order notes"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <div class="order_review">
                            <div class="mb-20">
                                <h4>Your Orders</h4>
                            </div>
                            <div class="table-responsive order_table text-center">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th colspan="2">Product</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="image product-thumbnail"><img src="assets/imgs/shop/product-1-1.jpg" alt="#"></td>
                                            <td>
                                                <h5><a href="shop-product-full.html">Yidarton Women Summer Blue</a></h5> <span class="product-qty">x 2</span>
                                            </td>
                                            <td>$180.00</td>
                                        </tr>
                                        <tr>
                                            <td class="image product-thumbnail"><img src="assets/imgs/shop/product-2-1.jpg" alt="#"></td>
                                            <td>
                                                <h5><a href="shop-product-full.html">LDB MOON Women Summe</a></h5> <span class="product-qty">x 1</span>
                                            </td>
                                            <td>$65.00</td>
                                        </tr>
                                        <tr>
                                            <td class="image product-thumbnail"><img src="assets/imgs/shop/product-3-1.jpg" alt="#"></td>
                                            <td><i class="ti-check-box font-small text-muted mr-10"></i>
                                                <h5><a href="shop-product-full.html">Women's Short Sleeve Loose</a></h5> <span class="product-qty">x 1</span>
                                            </td>
                                            <td>$35.00</td>
                                        </tr>
                                        <tr>
                                            <th>SubTotal</th>
                                            <td class="product-subtotal" colspan="2">$280.00</td>
                                        </tr>
                                        <tr>
                                            <th>Shipping</th>
                                            <td colspan="2"><em>Free Shipping</em></td>
                                        </tr>
                                        <tr>
                                            <th>Total</th>
                                            <td colspan="2" class="product-subtotal"><span class="font-xl text-brand fw-900">$280.00</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                            <div class="payment_method">
                                <div class="mb-25">
                                    <h5>Payment</h5>
                                </div>
                                <div class="payment_option">
                                    <div class="custome-radio">
                                        <input class="form-check-input" required="" type="radio" name="payment_option" id="exampleRadios3" checked="">
                                        <label class="form-check-label" for="exampleRadios3" data-bs-toggle="collapse" data-target="#bankTranfer" aria-controls="bankTranfer">Direct Bank Transfer</label>
                                        <div class="form-group collapse in" id="bankTranfer">
                                            <p class="text-muted mt-5">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration. </p>
                                        </div>
                                    </div>
                                    <div class="custome-radio">
                                        <input class="form-check-input" required="" type="radio" name="payment_option" id="exampleRadios4" checked="">
                                        <label class="form-check-label" for="exampleRadios4" data-bs-toggle="collapse" data-target="#checkPayment" aria-controls="checkPayment">Check Payment</label>
                                        <div class="form-group collapse in" id="checkPayment">
                                            <p class="text-muted mt-5">Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode. </p>
                                        </div>
                                    </div>
                                    <div class="custome-radio">
                                        <input class="form-check-input" required="" type="radio" name="payment_option" id="exampleRadios5" checked="">
                                        <label class="form-check-label" for="exampleRadios5" data-bs-toggle="collapse" data-target="#paypal" aria-controls="paypal">Paypal</label>
                                        <div class="form-group collapse in" id="paypal">
                                            <p class="text-muted mt-5">Pay via PayPal; you can pay with your credit card if you don't have a PayPal account.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="btn btn-fill-out btn-block mt-30">Place Order</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
   
        <!-- Add this script right before the closing </body> tag -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Get cart from localStorage
    let cart = JSON.parse(localStorage.getItem('evara-cart')) || [];
    
    // Function to update the order summary table
    function updateOrderSummary() {
        const orderTable = document.querySelector('.order_table tbody');
        if (!orderTable) return;
        
        // Clear existing rows (except the last 3 rows for subtotal, shipping, total)
        while (orderTable.rows.length > 3) {
            orderTable.deleteRow(0);
        }
        
        let subtotal = 0;
        
        // Add cart items to the table
        cart.forEach(item => {
            const row = orderTable.insertRow(0);
            
            // Product image
            const imgCell = row.insertCell(0);
            imgCell.className = 'image product-thumbnail';
            imgCell.innerHTML = `<img src="${item.image}" alt="${item.name}">`;
            
            // Product name and quantity
            const nameCell = row.insertCell(1);
            nameCell.innerHTML = `<h5><a href="shop-product-full.html">${item.name}</a></h5> <span class="product-qty">x ${item.quantity}</span>`;
            
            // Product total price
            const priceCell = row.insertCell(2);
            const itemTotal = item.price * item.quantity;
            priceCell.innerHTML = `PKR ${itemTotal.toFixed(2)}`;
            
            subtotal += itemTotal;
        });
        
        // Update subtotal, shipping, and total
        document.querySelector('.product-subtotal').textContent = `PKR ${subtotal.toFixed(2)}`;
        document.querySelector('.font-xl.text-brand.fw-900').textContent = `PKR ${subtotal.toFixed(2)}`;
    }
    
    // Function to handle place order button
    function handlePlaceOrder() {
        const placeOrderBtn = document.querySelector('.btn-fill-out.btn-block');
        if (placeOrderBtn) {
            placeOrderBtn.addEventListener('click', function(e) {
                e.preventDefault();
                
                // Validate form
                const formValid = validateCheckoutForm();
                if (!formValid) return;
                
                // Create order object
                const order = {
                    date: new Date().toISOString(),
                    items: cart,
                    total: cart.reduce((sum, item) => sum + (item.price * item.quantity), 0),
                    customer: {
                        firstName: document.querySelector('input[name="fname"]').value,
                        lastName: document.querySelector('input[name="lname"]').value,
                        email: document.querySelector('input[name="email"]').value,
                        phone: document.querySelector('input[name="phone"]').value,
                        address: document.querySelector('input[name="billing_address"]').value,
                        city: document.querySelector('input[name="city"]').value,
                        country: document.querySelector('.form-control.select-active').value
                    },
                    paymentMethod: document.querySelector('input[name="payment_option"]:checked').nextElementSibling.textContent.trim()
                };
                
                // Save order to localStorage (in a real app, you would send this to a server)
                const orders = JSON.parse(localStorage.getItem('evara-orders')) || [];
                orders.push(order);
                localStorage.setItem('evara-orders', JSON.stringify(orders));
                
                // Clear cart
                localStorage.removeItem('evara-cart');
                cart = [];
                
                // Redirect to thank you page (you should create this page)
                window.location.href = 'thank-you.html';
            });
        }
    }
    
    // Function to validate checkout form
    function validateCheckoutForm() {
        const requiredFields = [
            'fname', 'lname', 'billing_address', 'city', 'state', 
            'zipcode', 'phone', 'email'
        ];
        
        let isValid = true;
        
        requiredFields.forEach(fieldName => {
            const field = document.querySelector(`input[name="${fieldName}"]`);
            if (!field || !field.value.trim()) {
                isValid = false;
                field.classList.add('is-invalid');
            } else {
                field.classList.remove('is-invalid');
            }
        });
        
        // Validate email format
        const emailField = document.querySelector('input[name="email"]');
        if (emailField && !/^\S+@\S+\.\S+$/.test(emailField.value)) {
            isValid = false;
            emailField.classList.add('is-invalid');
        }
        
        if (!isValid) {
            alert('Please fill in all required fields correctly.');
        }
        
        return isValid;
    }
    
    // Initialize the page
    updateOrderSummary();
    handlePlaceOrder();
    
    // Add form validation on submit
    const checkoutForm = document.querySelector('form');
    if (checkoutForm) {
        checkoutForm.addEventListener('submit', function(e) {
            e.preventDefault();
            validateCheckoutForm();
        });
    }
    
    // Add styling for invalid fields
    const style = document.createElement('style');
    style.textContent = `
        .is-invalid {
            border-color: #dc3545 !important;
        }
        .is-invalid:focus {
            box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25) !important;
        }
    `;
    document.head.appendChild(style);
});
</script>
</body>
@endsection