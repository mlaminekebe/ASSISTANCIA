<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <!-- CSS only -->
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> --}}
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <!-- JavaScript Bundle with Popper -->
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body >
    <div id="app" >

        <nav class="navbar navbar-expand-md navbar-light bg-black shadow-sm"  id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="text-light " style="text-decoration: none" href="/">
                    <h1>ASSISTANCIA</h1></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">


                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        @if (Route::has('login'))
                        {{-- <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block"> --}}
                            @auth
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-light" style="text-decoration: none" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   <h4>
                                    {{ Auth::user()->name }}

                                   </h5>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item " href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('DECONNEXION') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                                {{-- <li class="nav-item">
                                    <button type="button" class="btn btn--primary">
                                        <a href="{{ url('/home') }}" class="nav-link">Home</a>
                                    </button>
                                </li> --}}
                        @else
                            <li class="nav-item">
                                <button type="button" class="btn btn--primary">
                                    <a href="{{ route('login') }}" class="nav-link text-light"><h4>connecter</h4></a>
                                </button>
                            </li>

                            @if (Route::has('register'))
                            <li class="nav-item">
                                <button type="button" class="btn btn--primary">
                                    <a href="{{ route('register') }}" class="nav-link text-light"><h4>s'inscrire</h4></a>

                                    </button>
                            </li>


                                @endif
                            @endauth
                        {{-- </div> --}}
                    @endif
                    </ul>
                </div>
            </div>
        </nav>
        @if (Session('success_message'))
        <div class="alert alert-success">
            {{session('success_message')}}
        </div>
    @endif



        <main class="py-4">
            @yield('content')
        </main>
    </div>
    @include('sweetalert::alert')

</body>
</html>
