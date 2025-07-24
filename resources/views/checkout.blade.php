@extends('layouts.main')

@push('title')
<title>Checkout</title>
@endpush

@section('content')
<body class="bg-[#f5f5f4] text-black min-h-screen flex-col">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.tailwindcss.com"></script>

<div class="container-fluid bg-light p-3">
    <h1 class="text-center text-secondary"><i class="fa-solid fa-cart-shopping"></i> Checkout</h1>
</div>

<section>
    <div class="container my-3">
        <h2 class="text-black">Billing Details</h2>
        <div class="row">
            <div class="col-lg-12">
                <form action="{{ route('checkout.placeOrder') }}" method="POST">
                    @csrf
                    <div class="row my-3">

                        <div class="col-lg-12 mb-3">
                            <select name="district" class="form-select">
                                <option selected disabled>Select your District</option>
                                <option value="Kaski">Kaski</option>
                                <option value="Kathmandu">Kathmandu</option>
                                <option value="Butwal">Butwal</option>
                            </select>
                        </div>

                        <div class="col-lg-6 mb-3">
                            <input type="text" name="first_name" class="form-control" placeholder="First Name" required>
                        </div>

                        <div class="col-lg-6 mb-3">
                            <input type="text" name="last_name" class="form-control" placeholder="Last Name" required>
                        </div>

                        <div class="col-lg-6 mb-3">
                            <input type="tel" name="phone" class="form-control" placeholder="Your Phone" required>
                        </div>

                        <div class="col-lg-6 mb-3">
                            <input type="email" name="email" class="form-control" placeholder="Your Email" required>
                        </div>

                        <div class="col-lg-6 mb-3">
                            <input type="text" name="pin_code" class="form-control" placeholder="Pin Code">
                        </div>

                        <div class="col-lg-6 mb-3">
                            <input type="text" name="landmark" class="form-control" placeholder="Landmark">
                        </div>

                        <div class="col-lg-6 mb-3">
                            <select name="location" class="form-select">
                                <option selected disabled>Select your Excart Location</option>
                                <option value="Pokhara">Pokhara</option>
                                <option value="Bhaktapur">Bhaktapur</option>
                            </select>
                        </div>

                        <div class="col-lg-6 mb-3">
                            <select name="payment_method" class="form-select" required>
                                <option selected disabled>Select your Payment Method</option>
                                <option value="cod">Cash on Delivery</option>
                                <option value="imepay">IME-Pay</option>
                                <option value="esewa">Esewa</option>
                            </select>
                        </div>

                        <div class="col-lg-12 mb-3">
                            <textarea name="address" class="form-control" placeholder="Your Address" rows="4" required></textarea>
                        </div>

                        <div class="col-lg-12 text-end">
                            <button type="submit" class="btn btn-dark rounded-pill px-4 py-2">
                                Place Order <i class="fa-solid fa-arrow-right"></i>
                            </button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Your Order -->
<section>
    <div class="container">
        <h3 class="text-black">Your Orders</h3>
        <div class="row mb-5">
            <div class="col-lg-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th><h5>Product</h5></th>
                            <th><h5>Price</h5></th>
                            <th><h5>Qty</h5></th>
                            <th><h5>Subtotal</h5></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $total = 0; @endphp
                        @foreach ($cartItems as $item)
                            @php 
                                $subtotal = $item->price * $item->quantity; 
                                $total += $subtotal;
                            @endphp
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('storage/' . $item->product->image) }}" alt="{{ $item->product->name }}" style="width:70px;" class="rounded-3 me-3">
                                        <h5>{{ $item->product->name }}</h5>
                                    </div>
                                </td>
                                <td>₹ {{ number_format($item->price, 2) }}</td>
                                <td>{{ $item->quantity }}</td>
                                <td>₹ {{ number_format($subtotal, 2) }}</td>
                            </tr>
                        @endforeach
                        <tr>
                            <th colspan="3" class="text-end"><h5>Total</h5></th>
                            <th><h5>Rs {{ number_format($total, 2) }}</h5></th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>



</body>
@endsection
