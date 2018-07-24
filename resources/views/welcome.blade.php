<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a> @else
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a> @endauth
        </div>
        @endif
    </div>
    <div class="container">
        <a class="button">Anchor</a>
        <button class="button">Button</button>
        <input class="button is-primary" type="submit" value="Submit input">
        <input class="button" type="reset" value="Reset input">
        <i class="fa fa-user"></i>

    </div>

    {{-- for js --}}
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>