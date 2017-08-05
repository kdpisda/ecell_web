@extends('layouts.app')
@section('title', 'Home')

@section('content')
<header id="intro">
    <div class="container">
        <div class="table">
            <div class="header-text">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 class="light white">E-summit'17</h1>
                        <h2 class="white typed"></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<section>
    <div class="cut cut-top"></div>
    <div class="container">
			<div class="row intro-tables">
				<div class="col-md-4">
					<div class="intro-table intro-table-first">
						<h4 class="white heading">Schedule</h4>
						<div class="owl-carousel owl-schedule bottom">
							<div class="item">
								<div class="schedule-row row">
									<div class="col-xs-6">
										<p class="regular white">Event</p>
									</div>
									<div class="col-xs-6 text-right">
										<p class="white">Coming soon...</p>
									</div>
								</div>
								<div class="schedule-row row">
									<div class="col-xs-6">
										<p class="regular white">Event</p>
									</div>
									<div class="col-xs-6 text-right">
										<p class="white">Coming soon..</p>
									</div>
								</div>
								<div class="schedule-row row">
									<div class="col-xs-6">
										<p class="regular white">Event</p>
									</div>
									<div class="col-xs-6 text-right">
										<p class="white">Coming soon..</p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="schedule-row row">
									<div class="col-xs-6">
										<p class="regular white">Event</p>
									</div>
									<div class="col-xs-6 text-right">
										<p class="white">Coming Soon...</p>
									</div>
								</div>
								<div class="schedule-row row">
									<div class="col-xs-6">
										<p class="regular white">Event</p>
									</div>
									<div class="col-xs-6 text-right">
										<p class="white">Coming Soon...</p>
									</div>
								</div>
								<div class="schedule-row row">
									<div class="col-xs-6">
										<p class="regular white">Event</p>
									</div>
									<div class="col-xs-6 text-right">
										<p class="white">Coming Soon...</p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="schedule-row row">
									<div class="col-xs-6">
										<p class="regular white">Event</p>
									</div>
									<div class="col-xs-6 text-right">
										<p class="white">Coming Soon...</p>
									</div>
								</div>
								<div class="schedule-row row">
									<div class="col-xs-6">
										<p class="regular white">Event</p>
									</div>
									<div class="col-xs-6 text-right">
										<p class="white">Coming Soon...</p>
									</div>
								</div>
								<div class="schedule-row row">
									<div class="col-xs-6">
										<p class="regular white">Event</p>
									</div>
									<div class="col-xs-6 text-right">
										<p class="white">Coming Soon...</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="intro-table intro-table-hover">
						<h4 class="white heading hide-hover">Register yourself!</h4>
						<div class="bottom">
							<h6 class="white heading small-heading no-margin regular">Portal to be opened soon</h6>
							<a href="#" class="btn btn-white-fill expand">Portal yet to be opened</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="intro-table intro-table-third">
					<h4 class="white heading">Notifications</h4>
						    <div class="item">
								<div class="schedule-row row">
									<div class="col-xs-12">
										<ul>
										<li class="regular white" style="margin-bottom:10px;">E-Summit '17 Official Home Page launched</li>
										<li class="regular white">E-Cell collaborates with Start-Up Initiative by Government of India</li>
										</ul>
									</div>
								</div>
							</div>
					</div>
				</div>
			</div>
		</div>
</section>
<section id="events" class="section section-padded">
    <div class="container">
        <div class="row text-center title">
            <h2>Main highlights</h2>
            <h4 class="light muted">Slogan or 1 line why our events should attract you.</h4>
        </div>
        <div class="row highlights">
            <div class="col-md-4">
                <div class="highlight">
                    <div class="icon-holder">
                        <img src="images/heart-blue.png" alt="" class="icon">
                    </div>
                    <h4 class="heading">Ignition - The B-Model Competition</h4>
                    <p class="description">E-Cell in its objective to promote growth of startups organizes a B-Plan competition which aims at meeting the startups with the investors and mentors. </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="highlight">
                    <div class="icon-holder">
                        <img src="images/guru-blue.png" alt="" class="icon">
                    </div>
                    <h4 class="heading">B Quiz</h4>
                    <p class="description">This is not just any quiz; this is the quiz! E-Cell NIT Raipur organizes B Quiz every year in both online and offline mode.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="highlight">
                    <div class="icon-holder">
                        <img src="images/weight-blue.png" alt="" class="icon">
                    </div>
                    <h4 class="heading">Startup Camp</h4>
                    <p class="description">Startup camp is an event under the Entrepreneurship cell which is held during E Summit and proves to be beneficial for both the E cell as well as budding startups. </p>
                </div>
            </div>
        </div>
    </div>
    <div class="cut cut-bottom"></div>
</section>
<section id="event">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-9">
                <div id="event-carousel" class="carousel slide" data-interval="false">
                    <h2 class="heading">Our Speakers</h2>
                    <a class="even-control-left" href="#event-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                    <a class="even-control-right" href="#event-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="row">
                                @foreach ($speakers as $speaker)
                                <div class="col-sm-4">
                                    <div class="single-event">
                                        <img class="images-responsive" src="uploads/speakers/{{ $speaker->meta }}" alt="{{ $speaker->name }}">
                                        <h4>{{ $speaker->name }}</h4>
                                        <h5>{{ $speaker->description }}</h5>
                                    </div>
                                </div>
                                @endforeach
                                <!-- <div class="col-sm-4">
                                    <div class="single-event">
                                        <img class="images-responsive" src="images/event/event2.jpg" alt="event-image">
                                        <h4>Aditi Chaurasia</h4>
                                        <h5>Co-founder, Engineer Babu</h5>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="single-event">
                                        <img class="images-responsive" src="images/event/event3.jpg" alt="event-image">
                                        <h4>Anil Joshi</h4>
                                        <h5>Managing Partner, Unicorn India Ventures</h5>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="single-event">
                                        <img class="images-responsive" src="images/event/event4.jpg" alt="event-image">
                                        <h4>Rahul Singhal</h4>
                                        <h5>Founder and CEO, Applop Incorporation</h5>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="single-event">
                                        <img class="images-responsive" src="images/event/event5.jpg" alt="event-image">
                                        <h4>Anup Kalbalia</h4>
                                        <h5>Tech Head at Directi</h5>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="single-event">
                                        <img class="images-responsive" src="images/event/event3.jpg" alt="event-image">
                                        <h4>Speaker-6</h4>
                                        <h5>???</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>          
    </div>
</section>
<section id="sponsor">
    <div id="sponsor-carousel" class="carousel slide" data-interval="false">
        <div class="container">
            <div class="row">
                <div class="col-sm-10">
                    <h2>Sponsors</h2>           
                    <a class="sponsor-control-left" href="#sponsor-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                    <a class="sponsor-control-right" href="#sponsor-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
                    <div class="carousel-inner">
                        <div class="item active">
                            <ul>
                                <li><img class="images-responsive" src="images/sponsor/sponsor1.png" alt=""></li>
                                <li><img class="images-responsive" src="images/sponsor/sponsor2.png" alt=""></li>
                                <li><img class="images-responsive" src="images/sponsor/sponsor3.png" alt=""></li>
                                <li><img class="images-responsive" src="images/sponsor/sponsor4.png" alt=""></li>
                                <li><img class="images-responsive" src="images/sponsor/sponsor5.png" alt=""></li>
                                <li><img class="images-responsive" src="images/sponsor/sponsor6.png" alt=""></li>
                            </ul>
                        </div>
                        <div class="item">
                            <ul>
                                <li><img class="images-responsive" src="images/sponsor/sponsor6.png" alt=""></li>
                                <li><img class="images-responsive" src="images/sponsor/sponsor5.png" alt=""></li>
                                <li><img class="images-responsive" src="images/sponsor/sponsor4.png" alt=""></li>
                                <li><img class="images-responsive" src="images/sponsor/sponsor3.png" alt=""></li>
                                <li><img class="images-responsive" src="images/sponsor/sponsor2.png" alt=""></li>
                                <li><img class="images-responsive" src="images/sponsor/sponsor1.png" alt=""></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>              
        </div>
        <div class="speaker">
            <img class="images-responsive" src="images/light.png" alt="">
        </div>
    </div>
</section>
<section id="map">
    <div class="map-responsive">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3718.5546355380966!2d81.60303361434238!3d21.24950218558309!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a28dde213f66723%3A0x21543965c50c43c7!2sNational+Institute+of+Technology+Raipur!5e0!3m2!1sen!2sin!4v1465033368318" width="400" height="300" frameborder="0" style="border:0" allowfullscreen=""></iframe>
    </div>
</section>
<section id="contact">
    <div class="row text-center title">
        <h2><br>Let's talk start-up</h2>
        <hr style="width:20%;"><br><br>
    </div>
    <div class="row">
        <div class="col-lg-6 col-sm-7">
            <div class="contact-info-box address clearfix">
                <h3><i class=" icon-map-marker"></i>Address:</h3>
                <span>NIT Raipur,G.E. Road<br>Raipur, C.G. 492010.</span>
            </div>
            <div class="contact-info-box phone clearfix">
                <h3><i class="fa-phone"></i>Phone:</h3>
                <span>94063-21248</span>
            </div>
            <div class="contact-info-box email clearfix">
                <h3><i class="fa-pencil"></i>email:</h3>
                <span>ecell@nitrr.ac.in</span>
            </div>
            <div class="contact-info-box hours clearfix">
                <h3><i class="fa-clock-o"></i>Hours:</h3>
                <span><strong>Monday - Thursday:</strong>10AM-5PM</span>
            </div>
            <ul class="social-link">
                <li class="twitter"><a href="https://www.facebook.com/ecellnitrr"><i class="fa-twitter"></i></a></li>
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
                    
                    <div class="text-center"><button type="submit" class="input-btn">Send Message</button></div>
                    <br>
                </form>
            </div>  
        </div>
    </div>
</section>
<section class="footer">
    <center><h5><strong>© E-Cell, NIT Raipur</strong></h5></center>
</section>
<!-- Scripts -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/typed.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/jquery.onepagenav.js"></script>
<script src="js/main.js"></script>
@endsection