<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/') }}" rel="stylesheet">
    <link href="{{ asset('icones/all.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">



        {{-- ======= Header =======  --}}
        <header id="header" class="fixed-top d-flex align-items-center">
            <div class="container d-flex align-items-center">

                <div class="logo me-auto">
                    <h1><a href="{{ route('welcome') }}"> <i class="bi bi-code-slash"></i> </a></h1>
                </div>

                <nav id="navbar" class="navbar order-last order-lg-0">
                    <ul>
                        <li><a class="nav-link scrollto" href="/">Home</a></li>


                        @auth
                            <a href="{{ url('/dashboard') }}" class="nav-link" wire:navigate>
                                Mon Profile
                                <i class="fa-solid fa-user-graduate"></i>
                            </a>
                        @else
                            <a href="{{ route('login') }}" class=" nav-link" wire:navigate>
                                Se Connecter
                            </a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="nav-link" wire:navigate>
                                    S'inscrire
                                </a>
                            @endif
                        @endauth


                        {{-- {{ route('login') }} --}}

                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav>
                <!-- .navbar -->

                <div class="header-social-links d-flex align-items-center">

                    <a href="https://www.facebook.com/formation.dev.web.fullstack" target="_blank" class="facebook">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="https://www.instagram.com/formation.dev.web/" target="_blank" class="instagram">
                        <i class="bi bi-instagram"></i>
                    </a>

                </div>

            </div>
        </header>
        {{-- End Header  --}}

        <div>
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </div>

        <div class="w-75   mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>

    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
     
    <script src="{{ asset('icones/all.js') }}"></script>
 
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
 
 
 
    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
   

</body>

</html>
