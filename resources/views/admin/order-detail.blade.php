@extends('admin.includes.main')

@push('title')
    <title>Order Details</title>
@endpush

@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">

                <div class="card mt-4 p-4 shadow">
                    <h4>Order Details</h4>
                    <hr>

                    <div class="row">
                        <div class="col-md-6">
                            <h6>Order Date: {{ $order->created_at->format('M d, Y') }}</h6>
                            <p><strong>Order ID:</strong> {{ $order->id }}</p>
                            <p><strong>Total Products:</strong> {{ $order->orderItems->count() }}</p>
                            <p><strong>Subtotal:</strong> ₹ {{ number_format($order->subtotal, 2) }}</p>
                            <p><strong>Total:</strong> ₹ {{ number_format($order->total_amount, 2) }}</p>
                            <p><strong>Payment Method:</strong> {{ $order->payment_method }}</p>
                            <p><strong>Payment Status:</strong> 
                                <span class="badge text-bg-{{ $order->payment_status == 'Completed' ? 'success' : 'warning' }}">
                                    {{ $order->payment_status }}
                                </span>
                            </p>
                        </div>

                        <div class="col-md-6">
                            <h6>Customer Information</h6>
                            <p><strong>Name:</strong> {{ $order->user->name }}</p>
                            <p><strong>Email:</strong> {{ $order->user->email }}</p>
                            <p><strong>Phone:</strong> {{ $order->user->phone ?? 'N/A' }}</p>
                            <p><strong>Shipping Address:</strong> {{ $order->shipping_address }}</p>
                        </div>
                    </div>

                    <hr>
                    <h5 class="mt-4">Ordered Products</h5>
                    <div class="table-responsive mt-3">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Unit Price</th>
                                    <th>Qty</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($order->orderItems as $item)
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="{{ asset('storage/' . $item->product->product_image) }}" width="70" class="rounded me-2" alt="Product Image">
                                                <div>{{ $item->product->product_name }}</div>
                                            </div>
                                        </td>
                                        <td>₹ {{ number_format($item->price, 2) }}</td>
                                        <td>{{ $item->quantity }}</td>
                                        <td>₹ {{ number_format($item->price * $item->quantity, 2) }}</td>
                                        <td>
                                            <span class="badge text-bg-{{ 
                                                $item->status == 'Delivered' ? 'success' :
                                                ($item->status == 'Shipped' ? 'info' : 
                                                ($item->status == 'Processing' ? 'warning' : 'secondary'))
                                            }}">
                                                {{ $item->status }}
                                            </span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
        </main>
    </div>
@endsection
