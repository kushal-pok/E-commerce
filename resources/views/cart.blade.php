@extends('layouts.main')

@push('title')
   <title>Cart Page</title>
@endpush

@section('content')
    <body class="bg-[#f5f5f4] dark:bg-[#faf7f7] text-[#edede9]  min-h-screen flex-col">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.tailwindcss.com"></script>
 <div class="container-fluid bg-light p-3">
        <h1 class="text-center text-secondary"><i class="fa-solid fa-cart-shopping"></i> Cart List</h1>
    </div>
    {{--Cart List--}}
    <section>
        <div class="container">
            <div class="row my-5">
                <div class="col-lg-12">
                    <table class="table">
                      <thead>
                        <tr class="bg-light">
                          <th scope="col"><h4>Product</h4></th>
                          <th scope="col"><h4>Price</h4></th>
                          <th scope="col"><h4>Quantity</h4></th>
                          <th scope="col"><h4>Subtotal</h4></th>
                          <th scope="col"><h4>Remove</h4></th>
                        </tr>
                      </thead>
                      {{-- <tbody>
                        <tr>
                          <th>
                            <div class="d-flex">
                            <div class="img">
                                <img src="{{url('assets/image/product/img4.webp')}}" alt="image" class="roundded-3" style="width:70px;">
                            </div>
                            <div>
                                <h5 class="p-3">Bowl</h5>
                            </div>
                            </div>
                          </th>
                          <td>$70</td>
                          <td>2</td>
                          <td>$140</td>
                           <td><button type="button" class="btn-close rounded-circle" aria-label="Close"></button></td>
                        </tr>
                       
                        <tr>
                          <th>
                            <div class="d-flex">
                            <div class="img">
                                <img src="{{url('assets/image/product/img2.webp')}}" alt="image" class="rounded-3" style="width:70px;">
                            </div>
                            <div>
                                <h5 class="p-3">Salt</h5>
                            </div>
                            </div>
                          </th>
                          <td>$70</td>
                          <td>2</td>
                          <td>$140</td>
                           <td><button type="button" class="btn-close rounded-circle" aria-label="Close"></button></td>
                        </tr>
                       
                        <tr>
                          <th>
                            <div class="d-flex">
                            <div class="img">
                                <img src="{{url('assets/image/product/img1.webp')}}" alt="image" class="rounded-3" style="width:70px;">
                            </div>
                            <div>
                                <h5 class="p-3">Griander</h5>
                            </div>
                            </div>
                          </th>
                          <td>$70</td>
                          <td>2</td>
                          <td>$140</td>
                           <td><button type="button" class="btn-close rounded-circle" aria-label="Close"></button></td>
                        </tr>
                       
                      </tbody> --}}
                      <tbody>
                        
<tbody>
    @php
    $subtotal=0;
    $total=0;
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
                    <h5>{{ $item['name'] }}</h5>
                </div>
            </div>
        </td>
        <td>Rs. {{ $item['price'] }}</td>
        <td>{{ $item['quantity'] }}</td>
        <td>Rs. {{ $subtotal }}</td>
        <td>
            <form action="{{ route('cart.remove', $id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn-close" aria-label="Close"></button>
            </form>
        </td>
    </tr>
@endforeach
<div class="text-end">
    <h5>Subtotal: Rs. {{ $total }}</h5>
    <h5>Discount: 10%</h5>
    <h5>Total: Rs. {{ $total * 0.9 }}</h5>
</div>
</tbody>



</tbody>
                    </table>
                </div>

                 @php
    $discount = 0.10; 
    $discountAmount = $subtotal * $discount;
    $total = $subtotal - $discountAmount;
@endphp

<div class="d-flex">
    <div><h5>Subtotal</h5></div>
    <div class="ms-auto"><h5>${{ $subtotal }}</h5></div>
</div>
<div class="d-flex my-2">
    <div><h5>Discount</h5></div>
    <div class="ms-auto"><h5>10%</h5></div>
</div>
<div class="d-flex my-2">
    <div><h5>Delivery Charge</h5></div>
    <div class="ms-auto"><h5>Free</h5></div>
</div><hr>
<div class="d-flex my-2">
    <div><h5>Total</h5></div>
    <div class="ms-auto"><h5>${{ $total }}</h5></div>
</div>
            </div>
        </div>
    </section>

    
    </body>
@endsection