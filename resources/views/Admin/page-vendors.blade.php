@extends('Admin.layout')
@section('content')
<section class="content-main">
    <div class="card mb-4 shadow-sm rounded-3">
        <div class="card-header bg-primary-light border-bottom d-flex justify-content-between align-items-center">
            <h4 class="card-title mb-0">Vendors List</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle text-center">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">Profile</th>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Address</th>
                            <th scope="col">City</th>
                            <th scope="col">Country</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($r as $rec)
                        <tr>
                           <td class="align-middle py-0">
    <img src="{{ asset($rec->VendorProfilePicture) }}" 
         alt="Profile"
         class="rounded-circle border d-block mx-auto"
         style="width: 50px; height: 50px;object-fit: cover;">
</td>
                            <td class="align-middle">{{ $rec->id }}</td>
                            <td class="align-middle">{{ $rec->VendorName }}</td>
                            <td class="align-middle">{{ $rec->VendorEmail }}</td>
                            <td class="align-middle">{{ $rec->VendorPhone }}</td>
                            <td class="align-middle">{{ $rec->VendorAddress }}</td>
                            <td class="align-middle">{{ $rec->VendorCity }}</td>
                            <td class="align-middle">{{ $rec->VendorCountry }}</td>
                            <td>
                                <div class="d-flex flex-column gap-2">
                                    @if($rec->VendorStatus == 'Pending')
                                    <form method="post" action="/update/{{$rec->id}}">
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-outline-success w-100">
                                            <i class="bi bi-check-circle me-1"></i> Approve
                                        </button>
                                    </form>
                                    @endif
                                    <form method="post" action="/delete/{{$rec->id}}">
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-outline-danger w-100">
                                            <i class="bi bi-x-circle me-1"></i> Reject
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                @if($r->isEmpty())
                <div class="text-center text-muted py-4">
                    <em>No vendors available.</em>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection
