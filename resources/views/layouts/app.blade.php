<!DOCTYPE html>
<html>
<head>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">

    <!-- Google CDN JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>

    <link rel="stylesheet" type="text/css" href="{{ asset ('css/base.css') }}">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset ('images/ecell.png') }}">
          
    <title>E-Cell | @yield('title')</title>
</head>
<nav>
    <div class="nav-wrapper light-blue lighten-5">
        <img src="{{ asset ('images/ecell.png') }}">
        <a href="#!" class="brand-logo">E-Cell</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>   
        @if (Route::has('login'))      
            <ul class="right hide-on-med-and-down">
                <li><a href="">Home</a></li>
                <li><a href="">Vision</a></li>
                <li><a href="">Events</a></li>
                <li><a href="">Blogs</a></li>
                <li><a href="">The Team</a></li>
                <li><a href="">Contact Us</a></li>
                @if (Auth::check())
                    <li><a href="">Dashoboard</a></li>
                @else
                    <li><a href="/register">Register</a></li>
                    <li><a href="/login">Login</a></li>
                @endif
            </ul>
            <ul class="side-nav" id="mobile-demo">
                <li><a href="">Home</a></li>
                <li><a href="">Vision</a></li>
                <li><a href="">Events</a></li>
                <li><a href="">Blogs</a></li>
                <li><a href="">The Team</a></li>
                <li><a href="">Contact Us</a></li>
                @if (Auth::check())
                    <li><a href="">Dashoboard</a></li>
                @else
                    <li><a href="">Register</a></li>
                    <li><a href="">Login</a></li>
                @endif
            </ul>
        @endif
    </div>
</nav>
<div id="preloader" style="display: flex;align-items: center;justify-content: center;background-color: rgba(255,255,255,0.9);position: fixed;z-index: 1000;
  top: 0;left: 0;right: 0;bottom: 0;" hidden>
    <div class="preloader-wrapper big active">
        <div class="spinner-layer spinner-blue">
        <div class="circle-clipper left">
          <div class="circle"></div>
        </div><div class="gap-patch">
          <div class="circle"></div>
        </div><div class="circle-clipper right">
          <div class="circle"></div>
        </div>
      </div>

      <div class="spinner-layer spinner-red">
        <div class="circle-clipper left">
          <div class="circle"></div>
        </div><div class="gap-patch">
          <div class="circle"></div>
        </div><div class="circle-clipper right">
          <div class="circle"></div>
        </div>
      </div>

      <div class="spinner-layer spinner-yellow">
        <div class="circle-clipper left">
          <div class="circle"></div>
        </div><div class="gap-patch">
          <div class="circle"></div>
        </div><div class="circle-clipper right">
          <div class="circle"></div>
        </div>
      </div>

      <div class="spinner-layer spinner-green">
        <div class="circle-clipper left">
          <div class="circle"></div>
        </div><div class="gap-patch">
          <div class="circle"></div>
        </div><div class="circle-clipper right">
          <div class="circle"></div>
        </div>
      </div>  
    </div>
</div>
<script type="text/javascript">
    $(document).ready( function() {
        $('#preloader').delay(1000).fadeOut();
    });
</script>
<body>
    @section('content')
    @show
</body>

<footer class="page-footer light-blue lighten-5 grey-text text-darken-4">
    <div class="container">
        <div class="row">
            <div class="col l4 m4 s12">
                <ul>
                    <li><img src="images/ecell.png"></li>
                </ul>
                <h5>Entrepreneurship Cell<br> NIT Raipur</h5>
            </div>
            <div class="col l4 m4 s12">
                <h5>Navigate</h5>
                <ul>
                    <li><a class="grey-text text-darken-3" href="#!">Link 1</a></li>
                    <li><a class="grey-text text-darken-3" href="#!">Link 2</a></li>
                    <li><a class="grey-text text-darken-3" href="#!">Link 3</a></li>
                    <li><a class="grey-text text-darken-3" href="#!">Link 4</a></li>
                </ul>
            </div>
            <div class="col l4 m4 s12">
                <h5>About Us</h5>
                <ul>
                    <li><a class="grey-text text-darken-3" href="#!">Link 1</a></li>
                    <li><a class="grey-text text-darken-3" href="#!">Link 2</a></li>
                    <li><a class="grey-text text-darken-3" href="#!">Link 3</a></li>
                    <li><a class="grey-text text-darken-3" href="#!">Link 4</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container center grey-text text-darken-4">
            © 2017 Entrepreneurship Cell, NIT Raipur
            <a href="#!">By Tech Team E-Cell</a>
        </div>
    </div>
</footer>    
</html>