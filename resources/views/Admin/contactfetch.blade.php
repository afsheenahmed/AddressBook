@extends('Admin.layout')

@section('content')
<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-12 col-md-10">
      <h2 class="mb-4 text-center fw-bold ">Customer Inquiries</h2>

      <!-- Export Buttons -->
      <!-- <div class="d-flex flex-wrap justify-content-end mb-3 gap-2">
        <button class="btn btn-success btn-sm">Export Excel</button>
        <button class="btn btn-danger btn-sm">Export PDF</button>
      </div> -->

      <!-- Contact Table -->
      <div class="table-responsive shadow rounded">
        <table class="table table-bordered table-hover align-middle text-center">
          <thead class="table bg-primary-light">
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Full Name</th>
              <th scope="col">Email</th>
              <th scope="col">Phone</th>
              <th scope="col">Message</th>
            </tr>
          </thead>
          <tbody>
            @forelse($c as $contact)
              <tr>
                <td>{{ $contact->id }}</td>
                <td>{{ $contact->Name }}</td>
                <td>{{ $contact->Email }}</td>
                <td>{{ $contact->Phone }}</td>
                <td>{{ $contact->Message }}</td>
              </tr>
            @empty
              <tr>
                <td colspan="5" class="text-muted">No contacts found.</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
