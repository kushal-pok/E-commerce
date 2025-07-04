@extends('user.layouts.main')

@push('title')
<title>Dashboard - User</title>
@endpush

@section('content')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="my-4">Dashboard</h1>
            
            <div class="row">
                <div class="col-xl-6 col-md-6">
                    <div class="card bg-info text-white mb-4">
                        <div class="card-body mx-auto">
                           <img 
    src="{{ Auth::user()->image ? asset('profile_images/' . Auth::user()->image) : url('dashboard/assets/img/user.png') }}" 
    style="width:155px; height:155px; object-fit:cover; border-radius:50%;"
    alt="User Profile Image"
/>
                        </div>
                        <div class="my-3">
                            <h5 class="text-center text-dark">{{ Auth::user()?->name ?? 'Guest' }}</h5>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-md-6">
                    <div class="card bg-info text-white mb-4" style="height:250px">
                        <div class="card-body mx-auto my-4">
                            <h5 class="text-dark">Billing Address</h5>
                            <h6 class="text-dark">{{ Auth::user()->address ?? 'No address available' }}</h6>
                            <span class="text-dark"><strong>Email:</strong> {{ Auth::user()?->email ?? 'no email available' }}</span><br>
                            <span class="text-dark"><strong>Phone:</strong> {{ Auth::user()->phone ?? 'N/A' }}</span><br>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12 col-md-12">
                    <div class="d-flex">
                        <h4>Recent Orders</h4>
                        <div class="ms-auto">
                            <a href="{{ url('user/order-history') }}" class="text-decoration-none btn btn-dark btn-sm">View All</a>
                        </div>
                    </div>

                    <div class="mt-3">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Order Id</th>
                                    <th>Date</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                       @php $orders = $orders ?? collect();
    $count = 1; @endphp
@forelse($orders as $order)
<tr>
    <td>{{ $count++ }}</td> {{-- This is your row number --}}
    <td>{{ $order->order_number }}</td>
    <td>{{ $order->created_at->format('d-m-Y') }}</td>
    <td>₹ {{ number_format($order->total, 2) }}</td>
    <td>{{ $order->status }}</td>
</tr>
@empty
<tr>
    <td colspan="5" class="text-center">No recent orders found.</td>
</tr>
@endforelse

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </main>
</div>

@endsection
