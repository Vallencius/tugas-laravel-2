
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hotel Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href={{ asset('css/home.css') }} rel="stylesheet"/>
    </head>
    <body class="text-light">
        <div class="flex-center position-ref full-height text-light">
            <div class="top-right links">
                @auth
                    <a class="text-light" href="{{ route('logout') }}">Logout</a>
                @else
                    <a class="text-light" href="{{ route('login') }}">Login</a>
                    <a class="text-light" href="{{ route('register') }}">Register</a>
                @endauth
            </div>

            <div class="content">
                <div class="title m-b-md">
                    Welcome! Let's Book a Room!
                </div>

                <div class="links">
                    <a class="text-light" href="{{ route('rooms') }}">Book a Room</a>
                    <a class="text-light" href="{{ route('news') }}">See our News</a>
                    {{-- <a href="{{ route('promo') }}">Hotel Promos</a> --}}
                    @auth
                        @if(Auth::user()->role == 'Admin')
                            <a class="text-light" href="{{ route('admin') }}">Admin Page</a>
                        @else
                            <a class="text-light" href="/bookList/{{ Auth::user()->id }}">Booking List</a>
                        @endif
                    @endauth
                </div>
            </div>
        </div>
    </body>
</html>
