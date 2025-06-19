<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

		<!-- Bootstrap CSS -->
		 <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Winky+Rough:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
	    <link rel="stylesheet" href="{{url('../assets/css/style.css')}}">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
		<title>Home Page</title>
	</head>

	<body>
            <section id="header">
                <a href="{{ route('home') }}"><span>Kitchen Kit</span></a>

               <div>
    <ul id="navbar">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('shop') }}">Shop</a></li>
        <li><a href="{{route('about')}}">About</a></li>
        <li><a href="{{route('contact')}}">Contact</a></li>

        <li>
            <a href="{{ route('cart') }}">
                <button class="btn-cart position-relative">
                    {{-- <i class="fas fa-shopping-cart"> --}}cart
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" style="font-size:15px; color: white;">
                        1
                        <span class="visually-hidden">unread messages</span>
                    </span>
                </button>
            </a>
        </li>

        <ul class="navbar-na ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="{{route('user')}}" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{url('user/settings')}}">Settings</a></li>
                        <li><a class="dropdown-item" href="{{url('/home')}}" target="_blank">GoTo Website</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="{{url('user/logout')}}">Logout</a></li>
                    </ul>
                </li>
            </ul>
    </ul>
</div>

                <div id="mobile" class="mobile">
                    <i id="bar" class="fas fa-outdent"></i>
                    <a href="#"><i class="fas fa-shopping-cart"></i></a>
                    <a href="#"><i class="fas fa-user"></i></a>
                </div>
            </section>