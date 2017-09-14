<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Erlita | @yield('title')</title>
        <!-- Fonts -->
        {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700"> --}}
        <link href="https://fonts.googleapis.com/css?family=Encode+Sans+Condensed" rel="stylesheet">
        <!-- Styles -->
        <link href="{{ asset('/css/font-awesome.min.css')}}" rel='stylesheet' type='text/css'>
        <link href="{{ asset('/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{ asset('/css/parsley.css')}}" rel="stylesheet">
        <link href="{{ asset('/css/navbar-fixed-top.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/blog.css')}}" rel="stylesheet">
        {{-- <link href="{{ asset('/css/dataTables.bootstrap.css')}}" rel="stylesheet"> --}}
        <link href="{{ asset('/css/selectize.css')}}" rel="stylesheet">
        <link href="{{ asset('/css/selectize.bootstrap3.css')}}" rel="stylesheet"> {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
        <style>
        body {
        font-family: sans-serif;
        /*color: white;*/
        }
        /*h1,h2,h3,h4 {
        color: white;
        }*/
        </style>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        Reni Erlita
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li class="{{ Request::is('home') ? "active" : "" }}"><a href="{{ url('/home') }}">Home</a></li>
                        <li class="{{ Request::is('about') ? "active" : "" }}"><a href="{{ url('/about') }}" title="">About</a></li>
                        <li class="{{ Request::is('contact') ? "active" : "" }}"><a href="{{ url('/contact') }}" title="">Contact</a></li>
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                @if (Session::has('success'))
                <div class="alert alert-success" role="alert">
                    <strong>Success:</strong> {{ Session::get('success') }}.
                </div>
                @endif
            </div>
        </div>
        @yield('content')
        <!-- JavaScripts -->
        <script src="{{ asset('/js/jquery-3.1.0.min.js')}}"></script>
        <script src="{{ asset('/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('/js/parsley.min.js')}}"></script>
        {{-- <script src="{{ asset('/js/dataTables.bootstrap.min.js')}}"></script> --}}
        <script src="{{ asset('/js/selectize.min.js')}}"></script>
        <script src="{{ asset('/js/custom.js')}}"></script>
        @yield('scripts')
        {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    </body>
</html>