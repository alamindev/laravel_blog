<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Blog | @yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar is-light">
            <div class="container">
                <div class="navbar-brand">
                    <a class="navbar-item" href="#">
                          <img src="https://bulma.io/images/bulma-logo.png" alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28">
                        </a>
                    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false">
                          <span aria-hidden="true"></span>
                          <span aria-hidden="true"></span>
                          <span aria-hidden="true"></span>
                          </a>
                </div>
                <div class="navbar-menu">
                    <div class="navbar-start">
                        <a class="navbar-item nav-link is-tab" href="">Learn</a>
                        <a class="navbar-item nav-link is-tab" href="">Discuss</a>
                        <a class="navbar-item nav-link is-tab" href="">Share</a>
                    </div>
                    <div class="navbar-end">
                        <div class="navbar-item has-dropdown is-hoverable">
                            @if(Auth::guest())
                            <a class="navbar-item is-tab is-capitalized" href="{{ route('login') }}">Login</a>
                            <a class="navbar-item is-tab is-capitalized" href="{{ route('register') }}">Join the Coummunity</a>                            @else
                            <button class="navbar-link dropdown nav-item is-tab has-text-dark is-size-6">
                                Hey, {{ Auth::user()->name }}
                              </button>
                            <div class="navbar-dropdown is-boxed">
                                <a class="navbar-item" href="#">
                                    <span class="icon has-text-primary">
                                    <i class="fa fa-fw fa-user-circle-o"></i>
                                    </span>   
                                    &nbsp;Profile</a>
                                <a class="navbar-item" href="#">
                                    <span class="icon has-text-success"> 
                                    <i class="fa fa-fw fa-bell"></i>
                                    </span> &nbsp;Notifications</a>
                                <a class="navbar-item" href="#"><span class="icon has-text-info"> <i class="fa fa-fw fa-cog"></i></span> &nbsp;settings</a>
                                <li class="navbar-divider"></li>


                                <a class="navbar-item" href="{{ route('logout') }}"><span class="icon has-text-danger"
                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                                    ><i class="fa fa-fw fa-sign-out"></i></span> &nbsp;LogOut</a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>

                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!--end coding nav-->
        <!--start coding for container-->
        <div class="container">
            @yield('main-content')
        </div>
        <!--end coding container-->
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>