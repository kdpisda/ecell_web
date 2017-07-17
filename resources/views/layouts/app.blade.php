<!DOCTYPE html>
  <html>
    <head>
      <link rel="shortcut icon" href="favicon.png" type="image/x-icon"> 
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" href="css/custom_white.css">
      <link rel="stylesheet" href="css/hover.css">
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <!-- jQuery library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <!-- Latest compiled JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script src="js/custom.js"></script>
      <title>E-Cell NIT Raipur</title>
      <meta charset="utf-8"> 
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://fonts.googleapis.com/css?family=Raleway:200,700" rel="styesheet">
    </head>
    <body style="background-color:#FFFFFF">
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
                <img class="logo" src="images/esummit_black.png" style="padding-top:10px;" height="100px">
                <a class="navbar-brand" href="#">E-Cell NIT Raipur</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home<span style="font-size:16px;color:white" class="pull-right hidden-xs showopacity glyphicon glyphicon-home red"></span></a></li>
                    <li ><a href="lighttheme pages/vision.html">Vision<span style="font-size:16px;" class="pull-right hidden-xs showopacity     glyphicon glyphicon-education"></span></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Events<span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-road"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="lighttheme pages/es.html" class="hvr-shutter-out-horizontal">E-Summit '17</a></li>
                              <li><a href="lighttheme pages/ignition.html" class="hvr-shutter-out-horizontal">Ignition</a></li>
                              <li><a href="lighttheme pages/startup.html" class="hvr-shutter-out-horizontal">Startup Camp</a></li>
                              <li><a href="lighttheme pages/bquiz.html" class="hvr-shutter-out-horizontal">B-Quiz</a></li>
                              <li><a href="lighttheme pages/wallstreet.html" class="hvr-shutter-out-horizontal">Wall Street</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us<span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a>
                            <ul class="dropdown-menu">
                              <li><a href="lighttheme pages/team.html" class="hvr-shutter-out-horizontal">Our Team</a></li>
                              <li><a href="lighttheme pages/future.html" class="hvr-shutter-out-horizontal">Future</a></li>
                              <li><a href="lighttheme pages/past.html" class="hvr-shutter-out-horizontal">Past</a></li>
                            </ul>
                          </li>
                    <li ><a href="lighttheme pages/blog.html">Blogs<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-dashboard"></span></a></li>
                     <li ><a href="tempblack.html">Change Theme<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-eye-open"></span></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        @section('content')
        @show
    </div>
    </body>   
</html>