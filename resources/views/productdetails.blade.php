 @extends('layouts.main')
 @push('title')
        <title>ProductDetails</title>
 @endpush

@section('content')
 <body class="bg-[#f5f5f4] dark:bg-[#faf7f7] text-[#edede9]  min-h-screen flex-col">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.tailwindcss.com"></script>
 <div class="container-fluid bg-light p-3">
        <h1 class="text-center text-black"><i class="fa-solid fa-layer-group"></i>Product_Details</h1>
    </div>

    <section class="my-5">
       <div class="container">
              <div class="row">
                     <div class="col-lg-4">
                                   <img src="{{url('assets/image/product/img1.webp')}}" class="rounded img-fluid" alt="..." style="width: 100%; height: 40vh;">
                            </div>
                        <div class="col-lg-8">
                     <div>
                     <h2 class="text-black">Kitchen Salt</h2>
                     <h4 class="text-black">Rs. 350</h4>
                     <input type="number" value="1" class="qty text-black">
                            <div class="rate">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            
                     </div>
                     <h6 class="text-black">2 Customer Ratings</h6>
                     
                     <div class="details text-black">
                     <p>Organize your pantry in style with our premium Glass Storage Jar Set. Each jar features a sleek, airtight metal lid and clear body for easy visibility of contents. Pre-labeled with modern, minimalist typography, these jars are perfect for storing dry goods such as pasta, lentils, quinoa, coffee beans, and protein powder.
                     Elevate your pantry or kitchen shelves with our beautifully designed Modern Glass Storage Jars. These multipurpose containers are crafted from thick, high-quality glass to showcase your dry goods while keeping them fresh with airtight stainless steel lids. Each jar is pre-labeled with clean, black handwritten-style text, eliminating the need for stickers or markers.
                     </p>
                     
                     <div>
                            <a href="{{route('cart')}}" class="btn btn-cart text-black rounded-pill">Add to cart</a>
                            <a href="{{route('checkout')}}" class="btn btn-buy text-black rounded-pill">Buy Now</a>
                     </div>
                     </div>
              </div>
       </div>
</div>
<div class="my-5">
       <h4 class="text-black">Product Description</h4>
        <p class="text-black">Organize your pantry in style with our premium Glass Storage Jar Set. Each jar features a sleek, airtight metal lid and clear body for easy visibility of contents. Pre-labeled with modern, minimalist typography, these jars are perfect for storing dry goods such as pasta, lentils, quinoa, coffee beans, and protein powder.
                     Elevate your pantry or kitchen shelves with our beautifully designed Modern Glass Storage Jars. These multipurpose containers are crafted from thick, high-quality glass to showcase your dry goods while keeping them fresh with airtight stainless steel lids. Each jar is pre-labeled with clean, black handwritten-style text, eliminating the need for stickers or markers.
                     </p>
                      <p class="text-black">Organize your pantry in style with our premium Glass Storage Jar Set. Each jar features a sleek, airtight metal lid and clear body for easy visibility of contents. Pre-labeled with modern, minimalist typography, these jars are perfect for storing dry goods such as pasta, lentils, quinoa, coffee beans, and protein powder.
                     Elevate your pantry or kitchen shelves with our beautifully designed Modern Glass Storage Jars. These multipurpose containers are crafted from thick, high-quality glass to showcase your dry goods while keeping them fresh with airtight stainless steel lids. Each jar is pre-labeled with clean, black handwritten-style text, eliminating the need for stickers or markers.
                     </p>
                      <p class="text-black">Organize your pantry in style with our premium Glass Storage Jar Set. Each jar features a sleek, airtight metal lid and clear body for easy visibility of contents. Pre-labeled with modern, minimalist typography, these jars are perfect for storing dry goods such as pasta, lentils, quinoa, coffee beans, and protein powder.
                     Elevate your pantry or kitchen shelves with our beautifully designed Modern Glass Storage Jars. These multipurpose containers are crafted from thick, high-quality glass to showcase your dry goods while keeping them fresh with airtight stainless steel lids. Each jar is pre-labeled with clean, black handwritten-style text, eliminating the need for stickers or markers.
                     </p>
</div> 
{{--review--}}
  <section class="my-5">
       <h2 class="text-black">02 Review</h2>
       <div class="row mt-4">
              <div class="col-lg-2">
                       <img src="{{url('assets/image/logo/user.png')}}" class="rounded-circle img-fluid" alt="...">
              </div>
              <div class="col-lg-10">
                     <div class="text-black">
                            <h4>Anil Pokhrel</h4>
                            <div>
                                <div class="d-flex">
            <div class="p-2 flex-grow-1"><h6>2025/05/23</h6></div>
  <div class="p-2">
        <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
  </div>

</div>
</div>
<p class="text-black">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making </p>
         <div>
              <a href="#"class="btn btn-cart rounded-pill"><i class="fa-solid fa-reply"></i>Reply</a>
         </div>
                     </div>
              </div>
       </div>
  </section>

  {{--Add Review--}}
  <section>
       <div class="container " style="align-items: center">
               <div class="card p-2 text-center" style="width: 70%; ">
              <h2>Give your review</h2>
              <div>
                     <h6>Rate this product</h6>
                     <span class="fa fa-star "></span>
<span class="fa fa-star "></span>
<span class="fa fa-star "></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
              </div>
             
              <div class="row my-3 p-3" >
                     <div class="col-lg-12">
                             <form action="#">
                                <div class="row">

                                      <div class="col-lg-6">
                                    <input type="Name" class="form-control" id="text" placeholder="You_Name">
                                   </div> 

                                      <div class="col-lg-6">
                                    <input type="email" class="form-control" id="text" placeholder="E-mail">
                                   </div>
                                   <div class="col-lg-6 my-5">
                                   <input type="text" class="form-control" id="descriptiom" placeholder="Your_Message" style="width:465px; height: 15vh;">
                                   </div>

                                   
                                </div>
                                <div class="col-auto text-center">
                                         <button type="submit" class="btn btn-cart mb-3">Share</button>
                                    </div>
                             </form>
                     </div>
              </div>
       </div>
       </div>
       </div>
  </section>
</div>

    </section>
 </body>


@endsection
