@extends("layouts.main")

@push('title')
<title>Shop</title>
@endpush

@section('content')
 <body class="bg-[#f5f5f4] dark:bg-[#faf7f7] text-[#edede9]  min-h-screen flex-col">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.tailwindcss.com"></script>
	<!-- Start Hero Section -->
			<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1  >Shop</h1>
								  <h2 >#Stay Home</h2>

                <p>Save your all product in big offer</p>
							</div>
						</div>
						<div class="col-lg-7">
							
						</div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->

		

		<div class="untree_co-section product-section before-footer-section">
		    <div class="container">
		      	<div class="row">
					<h2 class="text-black text-center">Our Product</h2>
					<p class="text-black text-center p-4" >Collection of your product</p>

		      		<!-- Start Column 1 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5">
						<a class="product-item" href="{{route('productdetails')}}">
							<img src="{{url('assets/image/product/img1.webp')}}" class="img-fluid product-thumbnail">
								<h6><span class="badge bg-success">Available</span></h6>
							<h3 class="product-title">Nordic Chair</h3>
							<strong class="product-price">$50.00</strong>

							<span class="icon-cross">
								<img src="{{url('assets/image/product/cross.svg')}}" class="img-fluid">
							</span>
						</a>
					</div> 
					<!-- End Column 1 -->
						
					<!-- Start Column 2 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5">
						<a class="product-item" href="{{route('productdetails')}}">
							<img src="{{url('assets/image/product/img2.webp')}}" class="img-fluid product-thumbnail">
								<h6><span class="badge bg-success">Available</span></h6>
							<h3 class="product-title">Nordic Chair</h3>
							<strong class="product-price">$50.00</strong>

							<span class="icon-cross">
								<img src="{{url('assets/image/product/cross.svg')}}" class="img-fluid">
							</span>
						</a>
					</div> 
					<!-- End Column 2 -->

					<!-- Start Column 3 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5">
						<a class="product-item" href="{{route('productdetails')}}">
							<img src="{{url('assets/image/product/image3.webp')}}" class="img-fluid product-thumbnail">
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
					<div class="col-12 col-md-4 col-lg-3 mb-5">
						<a class="product-item" href=""{{route('productdetails')}}>
							<img src="{{url('assets/image/product/img4.webp')}}" class="img-fluid product-thumbnail">
								<h6><span class="badge bg-danger">Sale</span></h6>
							<h3 class="product-title">Ergonomic Chair</h3>
							<strong class="product-price">$43.00</strong>

							<span class="icon-cross">
								<img src="{{url('assets/image/product/cross.svg')}}" class="img-fluid">
							</span>
						</a>
					</div>
					<!-- End Column 4 -->


					<!-- Start Column 1 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5">
						<a class="product-item" href="{{route('productdetails')}}">
							<img src="{{url('assets/image/product/img5.webp')}}" class="img-fluid product-thumbnail">
								<h6><span class="badge bg-success">Available</span></h6>
							<h3 class="product-title">Nordic Chair</h3>
							<strong class="product-price">$50.00</strong>

							<span class="icon-cross">
								<img src="{{url('assets/image/product/cross.svg')}}" class="img-fluid">
							</span>
						</a>
					</div> 
					<!-- End Column 1 -->
						
					<!-- Start Column 2 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5">
						<a class="product-item" href="{{route('productdetails')}}">
							<img src="{{url('assets/image/product/img6.webp')}}" class="img-fluid product-thumbnail">
								<h6><span class="badge bg-success">Available</span></h6>
							<h3 class="product-title">Nordic Chair</h3>
							<strong class="product-price">$50.00</strong>

							<span class="icon-cross">
								<img src="{{url('assets/image/product/cross.svg')}}" class="img-fluid">
							</span>
						</a>
					</div> 
					<!-- End Column 2 -->

					<!-- Start Column 3 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5">
						<a class="product-item" href="{{route('productdetails')}}">
							<img src="{{url('assets/image/product/img8.webp')}}" class="img-fluid product-thumbnail">
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
					<div class="col-12 col-md-4 col-lg-3 mb-5">
						<a class="product-item" href="{{route('productdetails')}}">
							<img src="{{url('assets/image/product/img9.webp')}}" class="img-fluid product-thumbnail">
								<h6><span class="badge bg-danger">Sale</span></h6>
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
			<div class="untree_co-section product-section before-footer-section">
		    <div class="container">
		      	<div class="row">
					<h2 class="text-black text-center">New Arrival</h2>
					<p class="text-black text-center p-4" >New arrival product</p>

		      		<!-- Start Column 1 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5">
						<a class="product-item" href="{{route('productdetails')}}">
							<img src="{{url('assets/image/product/img10.webp')}}" class="img-fluid product-thumbnail">
								<h6><span class="badge bg-danger">New</span></h6>
							<h3 class="product-title">Nordic Chair</h3>
							<strong class="product-price">$50.00</strong>

							<span class="icon-cross">
								<img src="{{url('assets/image/product/cross.svg')}}" class="img-fluid">
							</span>
						</a>
					</div> 
					<!-- End Column 1 -->
						
					<!-- Start Column 2 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5">
						<a class="product-item" href="{{route('productdetails')}}">
							<img src="{{url('assets/image/product/img9.webp')}}" class="img-fluid product-thumbnail">
								<h6><span class="badge bg-danger">New</span></h6>
							<h3 class="product-title">Nordic Chair</h3>
							<strong class="product-price">$50.00</strong>

							<span class="icon-cross">
								<img src="{{url('assets/image/product/cross.svg')}}" class="img-fluid">
							</span>
						</a>
					</div> 
					<!-- End Column 2 -->

					<!-- Start Column 3 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5">
						<a class="product-item" href="{{route('productdetails')}}">
							<img src="{{url('assets/image/product/img8.webp')}}" class="img-fluid product-thumbnail">
								<h6><span class="badge bg-danger">New</span></h6>
							<h3 class="product-title">Kruzo Aero Chair</h3>
							<strong class="product-price">$78.00</strong>

							<span class="icon-cross">
								<img src="{{url('assets/image/product/cross.svg')}}" class="img-fluid">
							</span>
						</a>
					</div>
					<!-- End Column 3 -->

					<!-- Start Column 4 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5">
						<a class="product-item" href=""{{route('productdetails')}}>
							<img src="{{url('assets/image/product/img4.webp')}}" class="img-fluid product-thumbnail">
								<h6><span class="badge bg-danger">New</span></h6>
							<h3 class="product-title">Ergonomic Chair</h3>
							<strong class="product-price">$43.00</strong>

							<span class="icon-cross">
								<img src="{{url('assets/image/product/cross.svg')}}" class="img-fluid">
							</span>
						</a>
					</div>
					<!-- End Column 4 -->


					<!-- Start Column 1 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5">
						<a class="product-item" href="{{route('productdetails')}}">
							<img src="{{url('assets/image/product/img5.webp')}}" class="img-fluid product-thumbnail">
								<h6><span class="badge bg-success">Available</span></h6>
							<h3 class="product-title">Nordic Chair</h3>
							<strong class="product-price">$50.00</strong>

							<span class="icon-cross">
								<img src="{{url('assets/image/product/cross.svg')}}" class="img-fluid">
							</span>
						</a>
					</div> 
					<!-- End Column 1 -->
						
					<!-- Start Column 2 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5">
						<a class="product-item" href="{{route('productdetails')}}">
							<img src="{{url('assets/image/product/img6.webp')}}" class="img-fluid product-thumbnail">
								<h6><span class="badge bg-success">Available</span></h6>
							<h3 class="product-title">Nordic Chair</h3>
							<strong class="product-price">$50.00</strong>

							<span class="icon-cross">
								<img src="{{url('assets/image/product/cross.svg')}}" class="img-fluid">
							</span>
						</a>
					</div> 
					<!-- End Column 2 -->

					<!-- Start Column 3 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5">
						<a class="product-item" href="{{route('productdetails')}}">
							<img src="{{url('assets/image/product/img8.webp')}}" class="img-fluid product-thumbnail">
								<h6><span class="badge bg-success">Available</span></h6>
							<h3 class="product-title">Kruzo Aero Chair</h3>
							<strong class="product-price">$78.00</strong>

							<span class="icon-cross">
								<img src="{{url('assets/image/product/cross.svg')}}" class="img-fluid">
							</span>
						</a>
					</div>
					<!-- End Column 3 -->

    </body>


@endsection