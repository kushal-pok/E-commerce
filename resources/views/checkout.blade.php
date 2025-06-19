@extends('layouts.main')

@push('title')
<title>Checkout</title>
@endpush

@section('content')
<body class="bg-[#f5f5f4] dark:bg-[#faf7f7] text-[#edede9]  min-h-screen flex-col">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.tailwindcss.com"></script>
<div class="container-fluid bg-light p-3">
    <h1 class="text-center text-secondary"><i class="fa-solid fa-cart-shopping"></i> Checkout</h1>
</div>
<!-- Billing Information -->
<section>
    <div class="container my-3">
        <h2 class="text-black">Billing Details</h2>
        <div class="row">
            <div class="col-lg-12">
                <form>
                    <div class="row my-3">
                    <div class="col-lg-12 mb-3">
                        <select class="form-select form-control" aria-label="Default select example">
                            <option selected>Select your District</option>
                            <option value="1">Kaski</option>
                            <option value="2">Syangja</option>
                            <option value="3">Palpa</option>
                            <option value="3">Kathamandu</option>
                            <option value="3">Jhapa</option>
                            <option value="3">Butwal</option>
                            <option value="3">Parbat</option>
                            <option value="3">Lumbani</option>
                            <option value="3">Gorkha</option>
                        </select>
                        </div>

                        <div class="col-lg-6 mb-3">
                        <input type="text" class="form-control " placeholder="First Name">
                        </div>

                        <div class="col-lg-6 mb-3">
                        <input type="text" class="form-control " placeholder="Last Name">
                        </div>

                        <div class="col-lg-6 mb-3">
                        <input type="tel" class="form-control "  placeholder="Your Phone">
                        </div>

                        <div class="col-lg-6 mb-3">
                        <input type="email" class="form-control "  placeholder="Your Email">
                        </div>

                        <div class="col-lg-6 mb-3">
                        <input type="text" class="form-control " placeholder="Pin Code">
                        </div>

                        <div class="col-lg-6 mb-3">
                        <input type="text" class="form-control " placeholder="Landmark">
                        </div>

                        <div class="col-lg-6 mb-3">
                            <select class="form-select form-control " aria-label="Default select example">
                                <option selected>Select your Excart Location</option>
                                <option value="1">Pokhara</option>
                                <option value="2"> Oraste</option>
                                <option value="3">Ramdi</option>
                                <option value="3">Bhaktpur</option>
                                <option value="3">Buspark</option>
                            </select>
                        </div>

                        <div class="col-lg-6 mb-3">
                        <select class="form-select form-control" aria-label="Default select example">
                                <option selected>Select your Payment Method</option>
                                <option value="1">Cash on Delivery</option>
                                <option value="2">Ime-Pay</option>
                                <option value="3">Esewa</option>
                            </select>
                        </div>

                        <div class="col-lg-12 mb-3">
                        <textarea class="form-control " placeholder="Your Address" rows="4"></textarea>
                        </div>

                        

                    </div>
                </form>
            </div>
        </div>

    </div>
</section>

<!-- Your Order -->



<!-- Payment -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                    <label class="form-check-label" for="flexRadioDefault1">
                        <h5>IME-Pay</h5>
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" >
                    <label class="form-check-label" for="flexRadioDefault2">
                    <h5>Esewa</h5>
                    </label>
                    </div>

                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" >
                    <label class="form-check-label" for="flexRadioDefault2">
                    <h5>Cash on Delivery</h5>
                    </label>
                    </div>

                    <div>
                        <a class="btn btn-cart text-black rounded-pill my-4 px-3 py-2">Place Order <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
            </div>
        </div>
        
    </div>
    
</section>
<section>
    <div class="container">
    <h3 class="text-black">Your Orders</h3>
        <div class="row mb-5">
            <div class="col-lg-12">
            <table class="table" >
                <thead>
                    <tr>
                    <th scope="col"><h5>Product</h5></th>
                    <th scope="col"><h5>Price</h5></th>
                    <th scope="col"><h5>Quantity</h5></th>
                    <th scope="col"><h5>Subtotal</h5></th>
                    
                    </tr>
                </thead>
                <tbody>
                    <tr >
                    <th>
                        <div class="d-flex">
                            <div>
                                <img src="{{asset('assets/image/product/img8.webp')}}" style="width:70px;" class="rounded-3">
                            </div>
                            <div class="p-3"><h5>Bowl</h5></div>
                        </div>
                    </th>
                    <td >₹ 599.00</td>
                    <td>01</td>
                    <td>₹ 599.00</td>
                   
                    </tr>

                    <tr>
                    <th>
                        <div class="d-flex">
                            <div>
                                <img src="{{asset('assets/image/product/img10.webp')}}" style="width:70px;" class="rounded-3">
                            </div>
                            <div class="p-3"><h5>Glass</h5></div>
                        </div>
                    </th>
                    <td>₹ 599.00</td>
                    <td>01</td>
                    <td>₹ 599.00</td>
      
                    </tr>

                    <tr>
                    <th>
                        <div class="d-flex">
                            <div>
                                <img src="{{asset('assets/image/product/img9.webp')}}" style="width:70px;" class="rounded-3">
                            </div>
                            <div class="p-3"><h5>Cup</h5></div>
                        </div>
                    </th>
                    <td>₹ 799.00</td>
                    <td>01</td>
                    <td>₹ 799.00</td>
                    
                    </tr>

                    <tr>
                    
                    <th colspan="3"><h5>Total</h5></th>
                    <th><h5>₹ 1999.00</h5></th>
                    
                    </tr>
                    
                </tbody>
                </table>
                
            </div>
        
        </div>
    </div>
</section>

</body>


@endsection