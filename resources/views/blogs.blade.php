@extends('layouts.app')
@section('title', 'Home')

@section('content')
<section>
            <div style="color: #fff;background-color:black;padding:200px 15px;text-align:left;">
                <div class="text-center">
                    <h2>Blog</h2>
                    <hr style="width:20%;">
                    <br>
                    <br>
                    <p>
                        <p>
                            <h2>Coming soon</h2>
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
                        <span><strong>Monday - Friday : </strong>10AM-5PM</span>
                    </div>
                    <ul class="social-link">
                        <li class="twitter"><a href="https://twitter.com/ecellnitrr?lang=en" target="_blank"><i class="fa-twitter"></i></a></li>
                        <li class="facebook"><a href="https://www.facebook.com/ecellnitrr/" target="_blank"><i class="fa-facebook"></i></a></li>
                        <li class="linkedin"><a href="https://in.linkedin.com/in/e-cell-nit-raipur-a1682b122" target="_blank"><i class="fa-linkedin"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-6 col-sm-5 wow fadeInUp delay-05s">
                    <div class="form">

                        <div id="sendmessage">Your message has been sent. Thank you!</div>
                        <div id="errormessage"></div>
                        <form action="" method="post" role="form" class="contactForm">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control input-text" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control input-text" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control input-text" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
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
@endsection