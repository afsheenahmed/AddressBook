@extends('user.layout')
@section('content')
<body>
    
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card shadow-lg rounded-4">
        <div class="card-body p-4">
          <h3 class="card-title mb-4 text-center">Vendor Registration Form</h3>
          <form method="post" enctype="multipart/form-data" action="/addvendor"> 
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
            <div class="row mb-3">
              <div class="col-md-6">
                <label for="city" class="form-label">City</label>
                <input type="text" class="form-control" id="city" name="VendorCity" placeholder="Enter city" required>
              </div>
           
            <div class="mb-3">
              <label for="country" class="form-label">Country</label>
              <input type="text" class="form-control" id="country" name="VendorCountry" placeholder="Enter country" required>
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
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection