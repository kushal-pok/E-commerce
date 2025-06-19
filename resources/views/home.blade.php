@extends('layouts.main')

@section('content')
 <body class="bg-[#f5f5f4] dark:bg-[#faf7f7] text-[#edede9]  min-h-screen flex-col">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.tailwindcss.com"></script>

			<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>Modern Interior <span clsas="d-block">Kitchen Kit</span></h1>
								<p class="mb-4">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique.</p>
								<p><a href="{{url('/shop')}}" class="btn btn-secondary me-2" >Shop Now</a><a href="{{url('')}}" class="btn btn-white-outline">Explore</a></p>
							</div>
						</div>  
					</div>
				</div>
			</div>
       

                           <section id="feature" class="section-p1">
                <div class="fe-box">
                    <img src="assets/image/hero/f1.png" alt="">
                    <h6>Free Shiping</h6>
                </div>
                <div class="fe-box">
                    <img src="assets/image/hero/f2.png" alt="">
                    <h6>Online Order</h6>
                </div>
                <div class="fe-box">
                    <img src="assets/image/hero/f3.png" alt="">
                    <h6>Save Money</h6>
                </div>
                <div class="fe-box">
                    <img src="assets/image/hero/f4.png" alt="">
                    <h6>Promotions</h6>
                </div>
                <div class="fe-box">
                    <img src="assets/image/hero/f5.png" alt="">
                    <h6>Happy sell</h6>
                </div>
                <div class="fe-box">
                    <img src="assets/image/hero/f6.png" alt="">
                    <h6>24/7 Support</h6>
                </div>
            </section>
            <div class="product-section">
			<div class="container">
				<div class="row">

					<!-- Start Column 1 -->
					<div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
						<h2 class="mb-4 section-title text-black">Product in our store</h2>
						<p class="mb-4 text-black">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. </p>
						<p><a href="shop.html" class="btn btn-secondary">Explore</a></p>
					</div> 
					<!-- End Column 1 -->

					<!-- Start Column 2 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
						<a class="product-item" href="{{url('productdetails')}}">
							<img src="{{url('assets/image/product/img1.webp')}}" class="img-fluid product-thumbnail">
							<h6><span class="badge bg-danger">Sale</span></h6>
							<h3 class="product-title">Nordic Chair</h3>
							<strong class="product-price">$50.00</strong>

							<span class="icon-cross">
								<img src="{{url('assets/image/product/cross.svg')}}" class="img-fluid">
							</span>
						</a>
					</div> 
					<!-- End Column 2 -->

					<!-- Start Column 3 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
						<a class="product-item" href="{{url('productdetails')}}">
							<img src="{{url('assets/image/product/img2.webp')}}" class="img-fluid product-thumbnail">
							<h6><span class="badge bg-success">Available</span></h6>
							<h3 class="product-title">Kruzo Aero Chair</h3>
							<strong class="product-price">$78.00</strong>

							<span class="icon-cross">
								<img src="{{url('assets/image/product/cross.svg')}}" class="img-fluid">
							</span>
						</a>
					</div>
					<!-- End Column 3 -->

					<!-- Start Column 4 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
						<a class="product-item" href="{{url('productdetails')}}">
							<img src="{{url('assets/image/product/img4.webp')}}" class="img-fluid product-thumbnail">
							<h6><span class="badge bg-success">Available</span></h6>
							<h3 class="product-title">Ergonomic Chair</h3>
							<strong class="product-price">$43.00</strong>

							<span class="icon-cross">
								<img src="{{url('assets/image/product/cross.svg')}}" class="img-fluid">
							</span>
						</a>
					</div>
					<!-- End Column 4 -->

				</div>
			</div>
		</div>
                  <section id="banner" class="section-m1">
                <h4>Repair Services</h4>
                <h2>Up to <span>70% off</span>-In all product</h2>
                <button class="normal">Explore More</button>
            </section>



        @if (Route::has('login'))
            <div class="h-14.5 hidden lg:block"></div>
        @endif

            </body>
@endsection
