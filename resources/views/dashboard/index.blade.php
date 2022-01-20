<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    
    {{-- Fav Icon --}}
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="dashboard bg-gray-100 h-screen antialiased leading-none font-sans">
    <header class="bg-gray-800 py-4 fixed w-full z-20 top-0">
        <div class="container mx-auto flex justify-between items-center px-6">
            <div>
                <a href="{{ url('dashboard') }}" class="text-lg font-semibold text-gray-100 no-underline">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>
            <nav class="space-x-4 text-gray-300 text-sm sm:text-base">
                @guest
                    <a class="no-underline hover:underline" href="{{ url('login') }}">{{ __('Login') }}</a>
                    <a class="no-underline hover:underline" href="{{ url('register') }}">{{ __('Register') }}</a>
                @else
                    <span>{{ Auth::user()->name }}</span>

                    <a href="{{ url('logout') }}"
                       class="no-underline hover:underline"
                       onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ url('logout') }}" method="POST" class="hidden">
                        {{ csrf_field() }}
                    </form>
                @endguest
            </nav>
        </div>
    </header>
    <main>
        <div class="flex flex-col md:flex-row h-screen">
            @include('dashboard.navigation')
            <div id="content" class="bg-gray-100 w-full mt-14 p-4 pb-24 md:pb-5">
                @yield('content')
            </div>            
        </div>
    </main>
</body>
</html>