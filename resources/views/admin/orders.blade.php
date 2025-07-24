@extends('admin.includes.main')
@push('title')
<title>Orders</title>
@endpush

@section('content')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="card p-4 mt-4">
                <div class="row">
                    <div class="col-xl-12 col-md-12">
                        <div class="d-flex">
                            <h4>Orders</h4>
                        </div>
                        <div class="mt-3">
                            <table id="datatablesSimple" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Order Id</th>
                                        <th>Customer Name</th>
                                        <th>Total</th>
                                        <th>Commission (₹)</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($orders as $order)
                                    <tr>
                                        <td>{{ $order->id }}</td>
                                        <td>{{ $order->user->name ?? 'Guest' }}</td>
                                        <td>₹ {{ number_format($order->total_amount, 2) }}</td>
                                        <td>₹ {{ number_format($order->commission ?? 0, 2) }}</td>
                                        <td>
                                            <span class="badge rounded-pill text-bg-{{ 
                                                $order->status == 'Pending' ? 'warning' :
                                                ($order->status == 'On the Way' ? 'info' :
                                                ($order->status == 'Delivered' ? 'success' : 'secondary'))
                                            }}">
                                                {{ $order->status }}
                                            </span>
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.detail', $order->id) }}" class="btn btn-warning btn-sm">
                                                <i class="fa-regular fa-eye"></i> View
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @if(count($orders) === 0)
                                    <tr>
                                        <td colspan="6" class="text-center">No orders found.</td>
                                    </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

@endsection
