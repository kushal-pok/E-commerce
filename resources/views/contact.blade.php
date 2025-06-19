@extends('layouts.main')
@push('title')
 <title>Contact</title>
@endpush

@section('content')
<body class="bg-[#f5f5f4] dark:bg-[#faf7f7] text-[#edede9]  min-h-screen flex-col">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.tailwindcss.com"></script>
<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1 class="text-center">Contact Us</h1>
                                  <h2 class="text-center">#Let's-Talk</h2>

                <p class="text-center">LEAVE A MESSAGE!We love to hear from you!</p>
							</div>
						</div>
						<div class="col-lg-7">
							
						</div>
					</div>
				</div>
			</div>
  <section>
    <div class="container py-5">
       <div class="row">
    <div class="col-lg-12">
        <div class="d-flex align-items-start gap-4">
            <div class="details" style="width: 18rem;">
                <div class="bg-light text-secondary p-3">
                    <i class="fa-solid fa-location-dot"></i>
                    <h4 class="d-inline-block ms-2">Location</h4>
                </div>
                <ul class="list-group list-group-flush p-3">
                     <li class="list-group-item">Kushal POkhrel</li>
                    <li class="list-group-item">Kaski, Pokhara-18 Basitol</li>
                    <li class="list-group-item">+977 9816671815</li>
                    <li class="list-group-item">kushalpokhrel027@gmail.com</li>
                </ul>
            </div>
            <div class="img pl-8">
                <img src="{{url('assets/image/logo/user.png')}}" alt="Owner-image" class="img-fluid pl-5" style="max-width: 150px;">
            </div>
        </div>
    </div>
</div>

        </div>
    </div>
  </section>
  <section class="p-5">
     <section class="text-center py-5">
        <h2 class="text-3xl fw-bold mb-2">Contact Us</h2>
        <p class="mb-4 text-gray-600">Any questions or remarks? Just write us a message!</p>

        <div class="container">
            <form class="row justify-content-center gap-3">
                <div class="col-md-4">
                    <input type="email" class="form-control rounded-pill bg-light border-0" placeholder="Enter a valid email address">
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control rounded-pill bg-light border-0" placeholder="Enter your Name">
                </div>
                <br>
                <div class="col-md-4 p-2">
                    <input type="phone" class="form-control rounded-pill bg-light border-0" placeholder="Enter your Number">
                </div>
                <div class="col-md-4 p-2">
                    <input type="text" class="form-control rounded-pill bg-light border-0" placeholder="Enter your Location">
                </div>
                <div class="w-100 mt-4 p-2">
                    <button class="btn btn-info rounded-pill px-5 text-white fw-semibold" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </section>

    <!-- Info Section -->
    <section class="bg-yellow py-5 text-black">
        <div class="container bg-white rounded-3 shadow py-4">
            <div class="row text-center">

                <!-- About Club -->
                <div class="col-md-4 mb-4">
                    <div class="bg-yellow text-4xl mb-2">
                        <i class="fas fa-person-running"></i>
                    </div>
                    <h5 class="fw-bold">Kitchen Kit</h5>
                    <p class="m-0">Kushal</p>
                    <p>Products</p>
                </div>

                <!-- Phone -->
                <div class="col-md-4 mb-4">
                    <div class="text-cyan-500 text-4xl mb-2">
                        <i class="fas fa-phone"></i>
                    </div>
                    <h5 class="fw-bold">Phone</h5>
                    <p class="m-0">+977 9816671815</p>
                    <p>+977 9826120724</p>
                </div>

                <!-- Office Location -->
                <div class="col-md-4 mb-4">
                    <div class="text-cyan-500 text-4xl mb-2">
                        <i class="fas fa-location-dot"></i>
                    </div>
                    <h5 class="fw-bold">Our Office </h5>
                    <p class="m-0">Kitchen Kit</p>
                    <p>kaski, Pokhara-18 basitol </p>
                </div>

            </div>
        </div>
    </section>

  </section>
</body>
@endsection