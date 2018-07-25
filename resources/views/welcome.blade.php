<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Laravel Blog | @yield('title')</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
  <div id="app">
    <h1>welcome page</h1>
  </div>
  <!--end coding app vue id-->
  {{-- for js --}}
  <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>