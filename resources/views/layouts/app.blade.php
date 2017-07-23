<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'E-Summit') }} | @yield('title')</title>
    <link rel="shortcut icon" href="images/logo-final.png" type="image/x-icon"> 
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Owl -->
    <link rel="stylesheet" type="text/css" href="css/owl.css">
    <!-- Animate.css -->
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Main style -->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Responsive -->
    <link href="css/responsive.css" rel="stylesheet">
    <!--Font awesome -->
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="preloader">
        <img src="images/esummit_black.png" alt="E-Cell NIT Raipur" height="150px">
    </div>
    <!-- NavBar -->
    <nav class="navbar sidebar" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar" style="background-color:white;"></span>
                    <span class="icon-bar" style="background-color:red;"></span>
                    <span class="icon-bar" style="background-color:white;"></span>
                </button>
                <img class="logo" src="images/ecell.png" style="padding-top:10px;">
                <a class="navbar-brand" href="#" style="padding-right:38px;">E-Cell NIT Raipur</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home<span style="font-size:16px;color:white" class="pull-right hidden-xs showopacity glyphicon glyphicon-home red"></span></a></li>
                    <li ><a href="blacktheme pages/vision.html">Vision<span style="font-size:16px;" class="pull-right hidden-xs showopacity     glyphicon glyphicon-education"></span></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Events<span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-road"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="blacktheme pages/es.html" class="hvr-shutter-out-horizontal">E-Summit '17</a></li>
                              <li><a href="blacktheme pages/ignition.html" class="hvr-shutter-out-horizontal">Ignition</a></li>
                              <li><a href="blacktheme pages/startup.html" class="hvr-shutter-out-horizontal">Startup Camp</a></li>
                              <li><a href="blacktheme pages/bquiz.html" class="hvr-shutter-out-horizontal">B-Quiz</a></li>
                              <li><a href="blacktheme pages/wallstreet.html" class="hvr-shutter-out-horizontal">Wall Street</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us<span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a>
                            <ul class="dropdown-menu">
                              <li><a href="blacktheme pages/team.html" class="hvr-shutter-out-horizontal">Our Team</a></li>
                              <li><a href="blacktheme pages/future.html" class="hvr-shutter-out-horizontal">Future</a></li>
                              <li><a href="blacktheme pages/past.html" class="hvr-shutter-out-horizontal">Past</a></li>
                            </ul>
                          </li>
                    <li ><a href="blacktheme pages/blog.html">Blogs<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-dashboard"></span></a></li>
                    @if (Auth::guest())
                    <li ><a href="#">Register<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-pencil"></span></a></li>
                    <li ><a href="#">Login<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-lock"></span></a></li>
                    @else
                    <li ><a href="#">Dashboard<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-th-large"></span></a></li>
                    <li ><a href="/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-play"></span></a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                    @endif
                    <li ><a href="tempwhite.html">Change Theme<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-eye-open"></span></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="main">
        @section('content')
        @show
    </div>
</body>
</html>