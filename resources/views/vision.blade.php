<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vision</title>
    <link rel="shortcut icon" href="/images/logo-final.png" type="image/x-icon">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Owl -->
    <link rel="stylesheet" type="text/css" href="/css/owl.css">
    <!-- Animate.css -->
    <link rel="stylesheet" type="text/css" href="/css/animate.css">
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Main style -->
    <link rel="stylesheet" type="text/css" href="/css/main.css">

    <!-- Responsive -->
    <link href="/css/responsive.css" rel="stylesheet">
    <!-- Login Modal -->
    <link href="/css/login.css" rel="stylesheet">
    <!--Font awesome -->
    <link href="/css/font-awesome.css" rel="stylesheet" type="text/css">
</head>

<body>
    <!--Modal Login/Signup-->
    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" align="center">
                    <img src="/images/login.png">
                </div>
                <div id="div-forms">
                    <form id="login-form">
                        <div class="modal-body">
                            <input id="login_username" class="form-control" type="text" placeholder="Username" required>
                            <input id="login_password" class="form-control" type="password" placeholder="Password" required>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Remember me
                                </label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-success btn-lg btn-block">Login</button>
                            </div>
                            <div>
                                <button id="login_lost_btn" type="button" class="btn btn-link">Lost Password?</button>
                                <button id="login_register_btn" type="button" class="btn btn-link">Register</button>
                            </div>
                        </div>
                    </form>
                    <form id="lost-form" style="display:none;">
                        <div class="modal-body">
                            <input id="lost_email" class="form-control" type="text" placeholder="E-Mail" required>
                        </div>
                        <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-success btn-lg btn-block">Send</button>
                            </div>
                            <div>
                                <button id="lost_login_btn" type="button" class="btn btn-link">Log In</button>
                                <button id="lost_register_btn" type="button" class="btn btn-link">Register</button>
                            </div>
                        </div>
                    </form>
                    <form id="register-form" style="display:none;">
                        <div class="modal-body">
                            <input id="register_username" class="form-control" type="text" placeholder="Username" required>
                            <input id="register_email" class="form-control" type="text" placeholder="E-Mail" required>
                            <input id="register_password" class="form-control" type="password" placeholder="Password" required>
                        </div>
                        <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-success btn-lg btn-block">Register</button>
                            </div>
                            <div>
                                <button id="register_login_btn" type="button" class="btn btn-link">Log In</button>
                                <button id="register_lost_btn" type="button" class="btn btn-link">Lost Password?</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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
                <a class="navbar-brand" href="#" style="padding-right:40px;">E-Cell NIT Raipur</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="https://ecell.nitrr.ac.in">Home<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home red"></span></a></li>
                    <li class="active"><a href="#">Vision<span style="font-size:16px;color:white" class="pull-right hidden-xs showopacity 	glyphicon glyphicon-education"></span></a></li>
                    <li><a href="/events">Events<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-dashboard"></span></a></li>
                    <li><a href="/team">Team<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>
                    <li><a href="/blogs">Blogs<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-dashboard"></span></a></li>
                </ul>
                </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--Main Content starts-->
    <div class="main">
        <div style="color: #777;background-color:white;padding:50px 15px;text-align:left;">
            <div class="text-center">
                <h2>About Us</h2>
                <hr style="width:20%;">
                <br>
                <center>
                <p style="color:black; max-width: 820px">Entrepreneurship Cell of NIT Raipur is non-profit organization working towards promoting the spirit of Entrepreneurship across Chhattisgarh. It aims to promote a startup-culture among denizens of NIT Raipur and equip them with the necessary tools to do so.
                <p style="color:black; max-width: 820px">A dedicated organisation working for more than half a decade, E Cell NIT Raipur has come a long way, establishing itself as one of the most effectively working Ecells with more than 60 motivated members.
                </center>
                <br>
            </div>
        </div>
        <div style="position:relative;">
            <div style="color:#ddd;background-color:#282E34;padding:50px 15px;text-align: left;">
                <div class="text-center">
                    <h2>Vision</h2>
                    <hr style="width:20%;">
                    <br>
                    <center>
                    <p style="color: #ddd; max-width:820px">Our goal is to connect budding startups in Chhattisgarh with prominent venture capitalists, and angel investors and clientele in India. E-Cell seeks to achieve its goals by organizing various workshops, seminars and events. Over the years, E-Cell NIT Raipur has organised events like “Wall Street”, "Criconometrica",“E-fair",“HR Sutra” and several workshops in collaboration with Government of India (MSME) to help students cultivate required acumen to survive and thrive in today’s market. “E-Summit”, the flagship event of E-Cell has catered to the entrepreneurial appetite of its followers.</p>
                    </center>
                    <br>
                </div>

            </div>
        </div>

        </section>

        <section id="contact">
            <div class="row text-center title">
                <h2><br>Let's talk start-up</h2>
                <hr style="width:20%;">
                <br>
                <br>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-7">
                    <div class="contact-info-box address clearfix">
                        <h3><i class=" icon-map-marker"></i>Address:</h3>
                        <span>NIT Raipur,G.E. Road<br>Raipur, C.G. 492010.</span>
                    </div>
                    <div class="contact-info-box phone clearfix">
                        <h3><i class="fa-phone"></i>Phone:</h3>
                        <span>8827544244</span>
                    </div>
                    <div class="contact-info-box email clearfix">
                        <h3><i class="fa-pencil"></i>email:</h3>
                        <span>ecell@nitrr.ac.in</span>
                    </div>
                    <div class="contact-info-box hours clearfix">
                        <h3><i class="fa-clock-o"></i>Hours:</h3>
                        <span><strong>Monday - Friday:</strong>10AM-5PM</span>
                    </div>
                    <ul class="social-link">
                        <li class="twitter"><a href="#"><i class="fa-twitter"></i></a></li>
                        <li class="facebook"><a href="#"><i class="fa-facebook"></i></a></li>
                        <li class="gplus"><a href="#"><i class="fa-google-plus"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-6 col-sm-5 wow fadeInUp delay-05s">
                    <div class="form">

                        <div id="sendmessage">Your message has been sent. Thank you!</div>
                        <div id="errormessage"></div>
                        <form action="" method="post" role="form" class="contactForm">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control input-text" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control input-text" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control input-text" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control input-text text-area" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                <div class="validation"></div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="input-btn">Send Message</button>
                            </div>
                            <br>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="footer">
            <center>
                <h5><strong>© E-Cell, NIT Raipur</strong></h5></center>
        </section>
        <!-- Scripts -->
        <script src="../js/jquery-1.11.1.min.js"></script>
        <script src="../js/owl.carousel.min.js"></script>
        <script src="../js/typed.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="../js/jquery.onepagenav.js"></script>
        <script src="../js/login.js"></script>
        <script src="../js/carousel.js"></script>
</body>

</html>