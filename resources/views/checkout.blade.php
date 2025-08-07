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
{{-- @php
    use Illuminate\Support\Str;

    $amount = $total; // from controller
    $tax_amount = 0;
    $total_amount = $amount + $tax_amount;
    $transaction_uuid = Str::uuid();
    $product_code = 'EPAYTEST';
    $secret_key = env('ESEWA_SECRET_KEY');

    $signature_payload = $total_amount . ',' . $transaction_uuid . ',' . $product_code . ',' . $secret_key;
    $signature = hash_hmac('sha256', $signature_payload, $secret_key);
@endphp --}}

<div class="container my-5">
    <h2 class="text-center mb-4">Billing Details</h2>
    <form method="POST" action="{{route('paypal')}}">
        @csrf
        <div class="row mb-3">
            <div class="col-md-6 mb-2">
            <div class="col-md-6 mb-2">
                <input type="text" name="phone" class="form-control" placeholder="Phone Number" required>
            </div>
            <div class="col-md-12 mb-2">
                <textarea name="address" class="form-control" rows="3" placeholder="Your Address" required></textarea>
            </div>
            <div class="col-md-12 mb-2">
                <select name="district" class="form-select" required>
                    <option selected disabled>Select your District</option>
                    <option value="Kaski">Kaski</option>
                    <option value="Kathmandu">Kathmandu</option>
                    <option value="Butwal">Butwal</option>
                </select>
            </div>
        </div>

         <input type="hidden" name="price" value="5">
    <input type="hidden" name="product_name" value="Laptop">
    <input type="hidden" name="quantity" value="1">
    <button type="submit" class="btn btn-success">Pay with PayPal</button>

    </form>
    <script src="https://accounts.google.com/gsi/client" async defer></script>
<script>
  window.onload = function () {
    google.accounts.id.initialize({
      client_id: "AUDCzaAyps95yQ0oEMNQaA_KiydsERXKOaa2j6NJdqpeVZMB-BQRk2Ld8HPAij4I8mPpMiVJ6WwZJIXB",
      callback: handleCredentialResponse
    });
    google.accounts.id.prompt(); // Shows the One Tap prompt
  };
</script>
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
                                    <td>Rs {{ number_format($item->price, 2) }}</td>
                                    <td>{{ $item->quantity }}</td>
                                    <td>Rs {{ number_format($subtotal, 2) }}</td>
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

   


    <!-- Esewa Script -->
    <script>
        document.getElementById('checkoutForm').addEventListener('submit', function(e) {
            const paymentMethod = document.getElementById('payment_method').value;

            if (paymentMethod === 'esewa') {
                e.preventDefault();

                const total = {{ $total }};

                document.getElementById('esewa_amount').value = total;
                document.getElementById('esewa_total').value = total;

                // This is a test signature. Replace with secure backend-generated signature in production.
                document.getElementById('esewa_signature').value = "i94zsd3oXF6ZsSr/kGqT4sSzYQzjj1W/waxjWyRwaME=";

                document.getElementById('esewaForm').submit();
            }
        });
    </script>
</body>
@endsection
