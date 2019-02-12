<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Formula1 World</title>
    <link rel="shortcut icon" href="/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/style.css">
    <link href="http://vjs.zencdn.net/6.4.0/video-js.css" rel="stylesheet">
    <script src="http://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
    <link href="/assets/jquery-ui/jquery-ui.min.css" rel="stylesheet">
</head>
<body>

  <header>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="{{ url('/') }}">
        Formula1 World
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item {{ Request::segment(1) == "home" ? "active" : "" }}">
            <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item {{ Request::segment(1) == "races" ? "active" : "" }}">
            <a class="nav-link" href="/races">Races</a>
          </li>
          <li class="nav-item {{ Request::segment(1) == "drivers" ? "active" : "" }}">
            <a class="nav-link" href="/drivers">Drivers</a>
          </li>
          <li class="nav-item {{ Request::segment(1) == "teams" ? "active" : "" }}">
            <a class="nav-link" href="/teams">Teams</a>
          </li>
          <li class="nav-item {{ Request::segment(1) == "about" ? "active" : "" }}">
              <a class="nav-link" href="/about">About</a>
          </li>
        </ul>

        <ul class="nav navbar-nav navbar-right mr-4">
          @if(Request::segment(1) != "search")
          <form class="form-inline mr-4" method="GET" action="/search">
            <input name="term" class="form-control mr-sm-2" type="search" placeholder="Search" value="{{ Request::get('term') }}" aria-label="Search">
            <button class="btn btn-default" type="submit">
              <i class="fa fa-search"></i>
            </button>
          </form>
          @endif
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-btn fa-user"></i> {{ Auth::user()->name }} <span class="caret"></span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" 
                    href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                    <i class="fa fa-btn fa-sign-out"></i> Sign Out</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
            </div>
          </li>          
        </ul>
      </div>
    </nav>
  </header>