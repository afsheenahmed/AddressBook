@extends('user.layout')

@section('content')
<div class="py-5" style="min-height: 100vh; background-color: #f8f9fa;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card shadow-lg rounded-4">
          <div class="card-body p-4">
            <h3 class="text-center mb-4">Vendor Portal</h3>

            <!-- Nav tabs -->
            <ul class="nav nav-tabs mb-4 justify-content-center" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="login-tab" data-bs-toggle="tab" data-bs-target="#login" type="button" role="tab">
                  Login
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="register-tab" data-bs-toggle="tab" data-bs-target="#register" type="button" role="tab">
                  Register
                </button>
              </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <!-- Login Tab -->
              <div class="tab-pane fade show active" id="login" role="tabpanel">
                <form method="post" action="/vendorlogin">
                  @csrf
                  <div class="mb-3">
                    <label for="vendor_email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="vendor_email" name="email" placeholder="Enter email" required>
                  </div>
                  <div class="mb-3">
                    <label for="vendor_password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="vendor_password" name="password" placeholder="Enter password" required>
                  </div>
                  <button type="submit" class="btn btn-success w-100">Login</button>
                </form>
              </div>

              <!-- Register Tab -->
              <div class="tab-pane fade" id="register" role="tabpanel">
                <form method="POST" action="/addvendor" enctype="multipart/form-data">
                  @csrf
                  <div class="mb-3">
                    <label for="name" class="form-label">Vendor Name</label>
                    <input type="text" class="form-control" id="name" name="VendorName" placeholder="Enter vendor name" required>
                  </div>
                  <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="VendorEmail" placeholder="Enter email" required>
                  </div>
                  <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="tel" class="form-control" id="phone" name="VendorPhone" placeholder="Enter phone number" required>
                  </div>
                  <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" name="VendorAddress" placeholder="Enter address" required>
                  </div>
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label for="city" class="form-label">City</label>
                      <input type="text" class="form-control" id="city" name="VendorCity" placeholder="Enter city" required>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="country" class="form-label">Country</label>
                      <input type="text" class="form-control" id="country" name="VendorCountry" placeholder="Enter country" required>
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
                  </div>
                  <div class="mb-3">
                    <label for="profile" class="form-label">Profile Picture (Optional)</label>
                    <input type="file" class="form-control" id="profile" name="VendorProfilePicture">
                  </div>
                  <button type="submit" class="btn btn-primary w-100">Register Vendor</button>
                  <div class="alert alert-info mt-3" role="alert">
                    <div class="d-flex align-items-center">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle me-2" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.8 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                      </svg>
                      <div>
                        <strong>Account Approval Required</strong>
                        <p class="mb-0">Your registration will be reviewed by our team. You will receive an email notification once your vendor account has been approved. This process typically takes 1-2 business days.</p>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection