<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
</head>

<body>
    <div id="app">
         {{-- HEADER --}}
        @include('partials.header')

        {{-- SIDEBAR --}}
        <div class="container-fluid vh-100">
            <div class="row h-100">
                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark navbar-dark sidebar collapse">
                    <div class="position-sticky pt-3">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                {{ Route::currentRouteName() }}
                                <a href="{{ route('admin.dashboard') }}" class="nav-link text-white {{ Route::currentRouteName() == 'admin.dashboard' ? 'bg-secondary rounded-2' : '' }}">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.projects.index') }}" class="nav-link text-white {{ Route::currentRouteName() == 'admin.projects.index' ? 'bg-secondary rounded-2' : '' }}">Projects</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                {{-- MAIN --}}
                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 pt-3">
                    @yield('content')
                </main>
            </div>
        </div>
    </div>
</body>

</html>
