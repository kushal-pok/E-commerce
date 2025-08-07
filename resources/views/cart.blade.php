@extends('layouts.main')

@push('title')
    <title>Cart Page</title>
@endpush

@section('content')
<body class="bg-[#f5f5f4] dark:bg-[#faf7f7] text-[#1e1e1e] min-h-screen">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

    <div class="container-fluid bg-light p-3">
        <h1 class="text-center text-secondary"><i class="fa-solid fa-cart-shopping"></i> Cart List</h1>
    </div>

    <section>
        <div class="container">
            <div class="row my-5">
                <div class="col-lg-12">
                    @if(session('cart') && count($cartItems) > 0)
                    <table class="table">
                        <thead>
                            <tr class="bg-light">
                                <th><h5>Product</h5></th>
                                <th><h5>Price</h5></th>
                                <th><h5>Quantity</h5></th>
                                <th><h5>Subtotal</h5></th>
                                <th><h5>Remove</h5></th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $total = 0;
                            @endphp

                            @foreach($cartItems as $id => $item)
                                @php
                                    $subtotal = $item['price'] * $item['quantity'];
                                    $total += $subtotal;
                                @endphp
                                <tr>
                                    <td>
                                        <div class="d-flex">
                                            <img src="{{ url($item['image']) }}" alt="Product Image" width="70" class="rounded-3">
                                            <div class="p-3">
                                                <h6>{{ $item['name'] }}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Rs. {{ $item['price'] }}</td>
                                    <td>{{ $item['quantity'] }}</td>
                                    <td>Rs. {{ $subtotal }}</td>
                                    <td>
                                        <form action="{{ route('cart.remove', $id) }}" method="POST" onsubmit="return confirm('Are you sure you want to remove this item from your cart?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn-close" aria-label="Close"></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    @php
                        $discount = 0.10;
                        $discountAmount = $total * $discount;
                        $grandTotal = $total - $discountAmount;
                    @endphp

                    <div class="p-3 border bg-white rounded shadow-sm mt-4">
                        <div class="d-flex">
                            <div><h5>Subtotal</h5></div>
                            <div class="ms-auto"><h5>Rs. {{ $total }}</h5></div>
                        </div>
                        <div class="d-flex my-2">
                            <div><h5>Discount</h5></div>
                            <div class="ms-auto"><h5>10%</h5></div>
                        </div>
                        <div class="d-flex my-2">
                            <div><h5>Delivery Charge</h5></div>
                            <div class="ms-auto"><h5>Free</h5></div>
                        </div>
                        <hr>
                        <div class="d-flex my-2">
                            <div><h5>Total</h5></div>
                            <div class="ms-auto"><h5>Rs. {{ number_format($grandTotal, 2) }}</h5></div>
                        </div>
                    </div>
                    @else
                        <div class="alert alert-info text-center mt-5">
                            Your cart is empty.
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
</body>
@endsection
