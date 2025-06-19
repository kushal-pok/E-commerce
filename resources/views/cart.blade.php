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
                      <tbody>
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
                       
                      </tbody>
                    </table>
                </div>
                <div class="col-lg-5 ms-auto  my-5 text-black">
                    <h3>Product Details</h3><hr>
               
                <div class="d-flex">
                    <div><h5>Subtotal</h5></div>
                    <div class="ms-auto"><h5>$450</h5></div>
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
                    <div class="ms-auto"><h5>$405</h5></div>
                </div>
                <div class="mt-4">
                      <a href="{{url('/checkout')}}" class="btn btn-cart text-black rounded-pill w-100">Proceed to checkout          <i class="fa-solid fa-arrow-right "></i></a>
                </div>
                 </div>
            </div>
        </div>
    </section>

    
    </body>
@endsection