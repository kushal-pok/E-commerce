<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
    <style>
        /* Navbar container */
.navbar {
    background-color: #ffffff;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    height: 70px; /* fixed height */
    min-height: 70px;
    padding-top: 0;
    padding-bottom: 0;
    padding-right: 0;
    padding-left: 0;
    display: flex;
    align-items: center;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
    background-color: #ffffff;
    transition: all 0.3s ease;
}
.navbar .container {
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
}


/* Brand/logo */
.navbar-brand {
    font-weight: 700;
    font-size: 1.5rem;
    color: #2c3e50;
    transition: color 0.3s ease;
}

.navbar-brand:hover {
    color: #5b9bd5;
}

/* Nav links */
.nav-link {
    color: #34495e;
    font-weight: 500;
    margin-left: 15px;
    transition: color 0.3s ease, transform 0.2s ease;
}

.nav-link:hover {
    color: #5b9bd5;
    transform: translateY(-1px);
}

/* Dropdown menu */
.dropdown-menu {
    border-radius: 8px;
    border: none;
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
    padding: 10px 0;
    animation: dropdownFade 0.3s ease;
}

@keyframes dropdownFade {
    from {
        opacity: 0;
        transform: translateY(10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Dropdown items */
.dropdown-item {
    font-weight: 500;
    padding: 10px 20px;
    color: #2c3e50;
    transition: background-color 0.2s ease, color 0.2s ease;
}

.dropdown-item:hover {
    background-color: #f0f4f8;
    color: #5b9bd5;
}

/* Toggler icon */
.navbar-toggler {
    border: none;
    padding: 8px;
    outline: none;
}

.navbar-toggler-icon {
    background-size: contain;
}

/* Responsive behavior */
@media (max-width: 768px) {
    .navbar-nav {
        margin-top: 10px;
    }

    .navbar-nav .nav-link {
        margin-left: 0;
        padding: 10px;
    }

    .dropdown-menu {
        width: 100%;
    }
}

    </style>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm " style=" w-100 h-50">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'KitchenKit') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
<script>
    const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
</script>
</html>
