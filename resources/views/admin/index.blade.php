@extends('admin.includes.main')

@push('title')
<title>Dashboard - Admin</title>
@endpush

@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="my-4">Dashboard</h1>
            
            <div class="row">
                <div class="col-xl-3 col-md-3">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body mx-auto mt-4">
                            <h5 class="text-dark">Total Orders</h5>
                        </div>
                        <div class="mb-4">
                            <h2 class="text-center text-dark">{{ $totalOrders }}</h2>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-3">
                    <div class="card bg-warning text-white mb-4">
                        <div class="card-body mx-auto mt-4">
                            <h5 class="text-dark">Total Commission</h5>
                        </div>
                        <div class="mb-4">
                            <h2 class="text-center text-dark">Rs {{ number_format($totalCommission, 2) }}</h2>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-3">
                    <div class="card bg-danger text-white mb-4">
                        <div class="card-body mx-auto mt-4">
                            <h5 class="text-dark">Total Users</h5>
                        </div>
                        <div class="mb-4">
                            <h2 class="text-center text-dark">{{ $totalUsers }}</h2>
                        </div>
                    </div>
                </div>

                {{-- <div class="col-xl-3 col-md-3">
                    <div class="card bg-info text-white mb-4">
                        <div class="card-body mx-auto mt-4">
                            <h5 class="text-dark">Total Vendors</h5>
                        </div>
                        <div class="mb-4">
                            <h2 class="text-center text-dark">{{ $totalVendors }}</h2>
                        </div>
                    </div>
                </div> --}}
            </div>
            
            <div class="row">
                <div class="col-xl-12 col-md-12">
                    <div class="d-flex">
                        <h4>Recent Orders</h4>
                        <div class="ms-auto">
                            <a href="{{ url('admin/orders') }}" class="text-decoration-none btn btn-dark btn-sm">View All</a>
                        </div>
                    </div>

                    <div class="mt-3">
                        <table id="datatablesSimple" class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Order Id</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($recentOrders as $order)
                                    <tr>
                                        <th scope="row">{{ $order->id }}</th>
                                        <td>{{ $order->created_at->format('d-m-Y') }}</td>
                                        <td>₹ {{ number_format($order->total_amount, 2) }}</td>
                                        <td>
                                            <span class="badge rounded-pill text-bg-{{ 
                                                $order->status == 'Processing' ? 'warning' :
                                                ($order->status == 'On the Way' ? 'info' : 
                                                ($order->status == 'Delivered' ? 'success' : 'secondary'))
                                            }}">
                                                {{ $order->status }}
                                            </span>
                                           <a href="{{ route('admin.order-detail', $order->id) }}" class="btn btn-sm btn-info">View Details</a>

                                        </td>
                                    </tr>
                                @endforeach
                                @if($recentOrders->isEmpty())
                                    <tr>
                                        <td colspan="4" class="text-center">No recent orders found.</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
           
        </div>
    </main>
</div>
@endsection
