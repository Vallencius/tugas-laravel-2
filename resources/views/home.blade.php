<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hotel Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href={{ asset('css/home.css') }} rel="stylesheet"/>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="top-right links">
                @auth
                    <a href="{{ route('logout') }}">Logout</a>
                @else
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Register</a>
                @endauth
            </div>

            <div class="content">
                <div class="title m-b-md">
                    Welcome! Let's Book a Room!
                </div>

                <div class="links">
                    <a href="{{ route('rooms') }}">Book a Room</a>
                    <a href="{{ route('news') }}">See our News</a>
                    {{-- <a href="{{ route('promo') }}">Hotel Promos</a> --}}
                    @auth
                        @if(Auth::user()->role == 'Admin')
                            <a href="{{ route('admin') }}">Admin Page</a>
                        @else
                            <a href="/bookList/{{ Auth::user()->id }}">Booking List</a>
                        @endif
                    @endauth
                </div>
            </div>
        </div>
    </body>
</html>
