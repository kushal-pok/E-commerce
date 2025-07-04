@extends('user.layouts.main')
@push('title')
<title>Order History</title>
@endpush

@section('content')
        
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4 mt-4">

                        <div class="card p-4">
                            <div class="row">
                                <div class="col-xl-12 col-md-12">
                                    <div class="d-flex">
                                        <h4>Order History</h4>
                                        
                                    </div>
                                    <div class="mt-3">
                                        <table id="datatablesSimple">
                                            <thead>
                                                <tr>
                                                <th scope="col">Order Id</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Total</th>
                                                <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($orders as $order)
        <tr>
            <th scope="row">{{ $order->order_number ?? $order->id }}</th>
            <td>{{ $order->created_at->format('d-m-Y') }}</td>
            <td>₹ {{ number_format($order->total, 2) }} ({{ $order->products_count ?? 'N/A' }} Products)</td>
            <td>
                @php
                    $statusClass = match($order->status) {
                        'Processing' => 'text-bg-warning',
                        'On the Way' => 'text-bg-info',
                        'Delivered' => 'text-bg-success',
                        default => 'text-bg-secondary',
                    };
                @endphp
                <span class="badge rounded-pill {{ $statusClass }}">{{ $order->status }}</span>
                <a href="{{ url('user/detail/' . $order->id) }}" class="text-decoration-none mx-2">View Details</a>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="4" class="text-center">No orders found.</td>
        </tr>
    @endforelse
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                        
                                </div>
                            </div>
                        </div>
                        
                       
                    </div>
                </main>
@endsection
                