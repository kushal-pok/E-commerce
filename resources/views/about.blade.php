@extends('layouts.main')
@push('title')
<title>About</title>
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
								<h1 >About Us</h1>
                                <h2>#Know Us</h2>

                <p>Know about our company and ourself</p>
							</div>
						</div>
						<div class="col-lg-7">
							
						</div>
					</div>
				</div>
			</div>
<section class="about p-5">              
  <div class="container mx-auto py-10">
    <div class="row">
      <!-- Left Details Section -->
      <div class="col-md-4 space-y-6 text-black">
        <h2 class="text-2xl font-bold">Details</h2>
        <div>
          <p class="font-semibold">Name:</p>
          <p>Kushal pokhrel</p>
        </div>
        <div>
          <p class="font-semibold">Age:</p>
          <p>19 years</p>
        </div>
        <div>
          <p class="font-semibold">Location:</p>
          <p>Kaski Pokhara-18 Basitol</p>
        </div>
        <div class="flex space-x-4 mt-4">
          <i class="fab fa-facebook text-xl"></i>
          <i class="fab fa-twitter text-xl"></i>
          <i class="fab fa-instagram text-xl"></i>
        </div>
      </div>

      <!-- Center Profile Section -->
      <div class="col-md-4 text-center flex flex-col items-center">
        <h1 class="text-5xl font-bold text-cyan-500">Profile</h1>
        <p class="mt-3 text-xl badge bg-danger" >I'm a creative webdeveloper</p>
        <div class="text-left mt-10">
          <h3 class="text-2xl font-bold mb-4 text-black">About Us</h3>
          <p class="text-gray-800">
            I am an allround web designer. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
          <p class="text-sm mt-4 text-gray-500">Image by Kushal
        </div>
        <a href=""><button class=" btn btn-buy mt-6 border-2 border-orange-400 text-black font-bold py-2 px-6 rounded-full hover:bg-orange-100 transition">
          Contact Us
        </button></a>
      </div>

      <!-- Right Sidebar -->
      <div class="col-md-4 bg-yellow-500 text-white text-center rounded-xl p-6">
        <img src="{{url('assets/image/logo/user.png')}}" alt="-----" class="rounded   -full w-40 h-40 mx-auto -mt-20 border-4 border-white" />
        <h2 class="mt-4 text-2xl font-bold">HELLO, I'M <br />Kushal</h2>
        <p class="mt-4 text-sm">
          I am a Web developer who can approach marketing projects from concept to implementation.
        </p>
        <div class="flex justify-center space-x-4 mt-6">
          <i class="fab fa-facebook-f"></i>
          <i class="fab fa-twitter"></i>
          <i class="fab fa-instagram"></i>
          <i class="fab fa-linkedin-in"></i>
        </div>
            </div>
        </div>
    </div>
    <div class="untree_co-section">
			<div class="container">

				<div class="row mb-5">
					<div class="col-lg-5 mx-auto text-center">
						<h2 class="section-title text-danger">Our Team</h2>
					</div>
				</div>

				<div class="row">

					<!-- Start Column 1 -->
					<div class="col-6 col-md-6 col-lg-3 mb-5 mb-md-0 ms-10 ml-20">
						<img src="{{url('assets/image/logo/user.png')}}" class="img-fluid mb-5">
						<h3 class="text-black"><span class="">Kushal</span> Pokhrel</h3>
            <span class="d-block position mb-4 text-black">Web Developer.</span>
            <p class="text-black">Separated they live in.
            Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            <p class="mb-0"><a href="#" class="more dark">Learn More <span class="icon-arrow_forward"></span></a></p>
					</div> 
					<!-- End Column 1 -->

					<!-- Start Column 2 -->
					<div class="col-6 col-md-6 col-lg-3 mb-5 mb-md-5 ms-5 ml-70">
						<img src="{{url('assets/image/logo/user.png')}}" class="img-fluid mb-5">

						<h3 class="text-black"><span class="">Shankar</span> Tharu</h3>
            <span class="d-block position mb-4 text-black">Fornted Developer & Designer</span>
            <p class="text-black">Separated they live in.
            Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            <p class="mb-0"><a href="#" class="more dark">Learn More <span class="icon-arrow_forward"></span></a></p>

					</div> 
                    <div class="col-6 col-md-6 col-lg-3 mb-5 mb-md-5 ms-5 ml-70">
						<img src="{{url('assets/image/logo/user.png')}}" class="img-fluid mb-5">

						<h3 class="text-black"><span class="">_____</span>_______________</h3>
            <span class="d-block position mb-4 text-black">Fornted Developer & Designer</span>
            <p class="text-black">Separated they live in.
            Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            <p class="mb-0"><a href="#" class="more dark">Learn More <span class="icon-arrow_forward"></span></a></p>

					</div> 
                    
					<!-- End Column 2 -->

					<!-- Start Column 3 -->
				
					

				</div>
			</div>
		</div>
</section>
</body>
@endsection