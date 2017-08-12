<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Summit '17 | @section('title')</title>
    <link rel="shortcut icon" href="/images/logo-final.png" type="image/x-icon">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Owl -->
    <link rel="stylesheet" type="text/css" href="/css/owl.css">
    <!-- Animate.css -->
    <link rel="stylesheet" type="text/css" href="/css/animate.css">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,700" rel="styesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Main style -->
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <!-- Responsive -->
    <link href="/css/responsive.css" rel="stylesheet">
    <!-- Login Modal -->
    <link href="/css/login.css" rel="stylesheet">
    <!-- Carousel -->
    <link href="/css/carousel.css" rel="stylesheet">
    <!-- Events -->
    <link href="/css/events.css" rel="stylesheet">
    <!-- Team -->
    <link href="/css/team.css" rel="stylesheet">
    <!--Font awesome -->
    <link href="/css/font-awesome.css" rel="stylesheet" type="text/css">
    <!-- Scripts -->
        <script src="/js/jquery-1.11.1.min.js"></script>
        <script src="/js/dots.js"></script>
        <script src="/js/modernizr.min.js"></script>
        <script src="/js/owl.carousel.min.js"></script>
        <script src="/js/typed.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="/js/jquery.onepagenav.js"></script>
        <script src="/js/main.js"></script>
        <script src="/js/login.js"></script>
</head>

<body>
    
     <div class="preloader">
        <img src="/images/ecell.png" alt="E-Cell NIT Raipur" height="200px" width="200px">
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
                <img class="logo" src="/images/logo-final.png" style="padding-top:10px;">
                <a class="navbar-brand" href="#" style="padding-right:40px;">       E-Cell NIT Raipur</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li id="home_navbar"><a href="https://ecell.nitrr.ac.in">Home<span style="font-size:16px;color:white" class="pull-right hidden-xs showopacity glyphicon glyphicon-home red"></span></a></li>
                    <li id="vision_navbar" ><a href="/vision">Vision<span style="font-size:16px;" class="pull-right hidden-xs showopacity 	glyphicon glyphicon-education"></span></a></li>
                    <li id="events_navbar"><a href="/events">Events<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-dashboard"></span></a></li>
                    <li id="team_navbar"><a href="/team">Team<span style="font-size:16px;" class="pull-right hidden-xs showopacity 	glyphicon glyphicon-user"></span></a></li>
                    <li id="blogs_navbar"><a href="/blogs">Blogs<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-dashboard"></span></a></li>
                </ul>
                </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--Main Content starts-->
    <div class="main">
        @section('content')
        @show
    </div>
    @section("scripts")
    @show
</body>
</html>