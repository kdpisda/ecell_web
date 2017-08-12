@extends('layouts.app')
@section('title', 'Events')

@section('content')
@parent
<style>
    #myCarousel li img{
    height:120px;
    width:172px;
    padding: 0;
    margin: 0;
    padding-right: 5px;
    padding-left: 5px;
    float: left;
}
</style>
<section class="slide-wrapper">
            <div class="container">
                <div id="myCarousel" class="carousel slide">
                    <!-- Indicators -->
                    <ol class="carousel-indicators" id="events_indicator">
                        @foreach ( $events as $event)
                            @if ( $loop->index == 0)
                                <li data-target="#myCarousel" data-slide-to="{{ $loop->index }}" class="active"></li>
                            @else
                                <li data-target="#myCarousel" data-slide-to="{{ $loop->index }}"></li>
                            @endif
                        @endforeach
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" id="events_container">
                        @foreach ( $events as $event)     
                            @if($loop->index == 0)                   
                                <div class="item item{{ $loop->index + 1 }} active">
                            @else
                                <div class="item item{{ $loop->index + 1 }}">
                            @endif
                                <div class="fill" style=" background-color:#48c3af;">
                                    <div class="inner-content">
                                        <div class="carousel-img">
                                            <img src="/uploads/events/{{ $event->meta }}" class="img img-responsive" />
                                        </div>
                                        <div class="carousel-desc">
                                            <h2>{{ $event->title }}</h2>
                                            <p>{{ $event->description }}</p>
                                            <!-- <button type="button" class="btn btn-primary" id="startup">Read more</button> -->
                                            <br><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <section id="utkrishthsection" style="display:none;">
            <a href="#" class="float ut">
                <i class="fa fa-chevron-circle-left my-float"></i>
            </a>

            <div style="color: #777;background-color:white;padding:50px 15px;text-align:left;">
                <h2 style="text-align:center;">Utkrishth</h2>
                <div class="center"><img src="/images/Event-03.png" class="img img-responsive" /></div>
                <p style="color:black;">This program will be based on the concept of Unnat Bharat Abhiyaan. We will be calling upon any one of the entrepreneurs from rural areas who have worked for the betterment of society among rural and tribal areas to make the lifestyle more sustainable. We will felicitate these people or call people from government for felicitation and provide them the respect and the recognition they deserve. The major goal behind this Event-0 is to reach out to Startup ideas in village areas rather than cities. There are many people who have done some great work in this field but haven’t been in any kind of limelight, so we want to give recognition, respect and media coverage to that person.</div>

            <div style="position:relative;">
                <div style="color:#ddd;background-color:#282E34;padding:50px 15px;text-align: left;">
                    <div class="text-center">
                        <h2>Need</h2>
                        <hr style="width:20%;">
                        <br>
                        <br>
                    </div>
                    <ul>
                        <li>Provides impetus to rural start-ups.</li>
                        <li>Helps to give exposure to people coming from village area.</li>
                        <li>Provides the students to witness such inspiring personalities and get a chance to listen to their stories from that person itself.</li>
                    </ul>
                </div>
            </div>
            <hr>
            <div style="position:relative;">
                <div style="color:#ddd;background-color:#282E34;padding:50px 15px;text-align: left;">
                    <div class="text-center">
                        <h2>Goals/Objectives</h2>
                        <hr style="width:20%;">
                        <br>
                        <br>
                    </div>

                    <ul>
                        <li>This will help sponsorship team in getting spons from NGOs and Government Organizations.</li>
                        <li>Will help in collaboration with Startup-CG.</li>
                        <li>Will be helpful for PR and Marketing Team if some great and interesting innovations are found.</li>
                        <li>Can prove to be a major Event-0 from the next session with people coming from different rural areas to present their innovative ideas.</li>
                    </ul>
                </div>
            </div>
            <hr>
            <div style="position:relative;">
                <div style="color:#ddd;background-color:#282E34;padding:50px 15px;text-align: left;">
                    <div class="text-center">
                        <h2>Procedures/Scope of Work</h2>
                        <hr style="width:20%;">
                        <br>
                        <br>
                    </div>
                    <ul>
                        <li>Search for these people through two of the major resources
                            <ul>
                                <li>Achieves of Online newspapers from the pages which contain local news.</li>
                                <li>Start-ups which took part in Startup CG program held in Shankara, Bhilai.</li>
                            </ul>
                        </li>
                        <li>Find out contact details and contact via phone call if possible otherwise will meet in person</li>
                        <li>Make a short Video film of 1-2 minutes on that person’s work and struggle. This movie will be played during E-Summit during introduction of that person before calling him upon stage.</li>
                        <li>Arrange transport facility for him or else he will manage himself.</li>
                    </ul>
                    <br>
                    <div class="text-center">
                        <button type="button" class="btn-lg btn-primary">Registration coming soon</button>
                    </div>
                </div>
            </div>
        </section>
        <section id="cricknometricsection" style="display:none;">
            <a href="#" class="float cr">
                <i class="fa fa-chevron-circle-left my-float"></i>
            </a>
            <div style="color: #777;background-color:white;text-align:center;padding:50px 15px;text-align: left;">
                <h2 style="text-align:center;">Cricnometrica</h2>
                <div class="text-center"><img src="/images/Event-02.png" class="img img-responsive" /></div>
                <p style="color:black;">Cricnometrica is an Event-0 designed to provide a stage for entertainment as well as a platform to showcase the individuals’ or teams’ knowledge of the game of cricket. A team game comprising of three rounds which range from pen paper to slideshows and leads finally to virtual bidding to create a team of their own .The team with the maximum points at the end of the third round is declared as the winner.</div>
            <div style="position:relative;">
                <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 15px;text-align: left;">
                    <div class="text-center">
                        <h2>Need</h2>
                        <hr style="width:20%;">
                        <br>
                        <br>
                    </div>
                    <ul>
                        <li>Helps develop marketing skills.</li>
                        <li>Develops the skills required in a future entrepreneur.</li>
                        <li>Develops resource and business management skills.</li>
                </div>
            </div>
            <hr>
            <div style="position:relative;">
                <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 15px;text-align: left;">
                    <div class="text-center">
                        <h2>Goals/Objectives</h2>
                        <hr style="width:20%;">
                        <br>
                        <br>
                    </div>

                    <ul>
                        <li>To help the students become aware of the market strategies</li>
                        <li>To promote the spirit of extra-curricular activities</li>
                        <li>Develop teamwork among students of NIT Raipur</li>
                    </ul>
                </div>
            </div>

            <hr>
            <div style="position:relative;">
                <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 15px;text-align: left;">
                    <div class="text-center">
                        <h2>Procedures/Scope of Work</h2>
                        <hr style="width:20%;">
                        <br>
                        <br>
                    </div>
                    <ul>
                        <p>1st Round – It consists of Aptitude Test which also has sufficient number of questions related to cricket. It is pen-paper based objective type written quiz where students can take part as a team.

                            <p>2nd Round – The shortlisted teams after 1st round proceed to the 2nd round in which Audio-Visual Quiz takes place. The Quiz consists of cricket related questions which are asked though images, videos and slideshow.

                                <p>3rd Round – Selected Top-8 teams go on to play in the third and the final round of the Event-0 in which bidding takes place. For this virtual money is given to all the teams which they use to buy players and team like an IPL Auction. At the end of this round whichever team gains most number of points is declared the winner.
                                    <br>
                                    <div class="text-center">
                                        <button type="button" class="btn-lg btn-primary">Registation coming soon</button>
                                    </div>
                </div>
            </div>
        </section>
        <section id="wallstreetsection" style="display:none;">
            <a href="#" class="float wa">
                <i class="fa fa-chevron-circle-left my-float"></i>
            </a>
            <div style="color: #777;background-color:white;text-align:center;padding:50px 15px;text-align: left;">
                <h2 style="text-align:center;">WALLSTREET</h2>
                <div class="text-center"><img src="/images/Event-02.png" class="img img-responsive " /></div>
                <p style="color:black;">Cricnometrica is an Event-0 designed to provide a stage for entertainment as well as a platform to showcase the individuals’ or teams’ knowledge of the game of cricket. A team game comprising of three rounds which range from pen paper to slideshows and leads finally to virtual bidding to create a team of their own .The team with the maximum points at the end of the third round is declared as the winner.</div>
            <div style="position:relative;">
                <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 15px;text-align: left;">
                    <div class="text-center">
                        <h2>Need</h2>
                        <hr style="width:20%;">
                        <br>
                        <br>
                    </div>
                    <ul>
                        <li>Helps develop marketing skills.</li>
                        <li>Develops the skills required in a future entrepreneur.</li>
                        <li>Develops resource and business management skills.</li>
                </div>
            </div>
            <hr>
            <div style="position:relative;">
                <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 15px;text-align: left;">
                    <div class="text-center">
                        <h2>Goals/Objectives</h2>
                        <hr style="width:20%;">
                        <br>
                        <br>
                    </div>

                    <ul>
                        <li>To help the students become aware of the market strategies</li>
                        <li>To promote the spirit of extra-curricular activities</li>
                        <li>Develop teamwork among students of NIT Raipur</li>
                </div>
            </div>
            <hr>
            <div style="position:relative;">
                <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 15px;text-align: left;">
                    <div class="text-center">
                        <h2>Procedures/Scope of Work</h2>
                        <hr style="width:20%;">
                        <br>
                        <br>
                    </div>
                    <ul>
                        <p>1st Round – It consists of Aptitude Test which also has sufficient number of questions related to cricket. It is pen-paper based objective type written quiz where students can take part as a team.

                            <p>2nd Round – The shortlisted teams after 1st round proceed to the 2nd round in which Audio-Visual Quiz takes place. The Quiz consists of cricket related questions which are asked though images, videos and slideshow.

                                <p>3rd Round – Selected Top-8 teams go on to play in the third and the final round of the Event-0 in which bidding takes place. For this virtual money is given to all the teams which they use to buy players and team like an IPL Auction. At the end of this round whichever team gains most number of points is declared the winner.
                                    <br>
                                    <div class="text-center">
                                        <button type="button" class="btn-lg btn-primary">Registation coming soon</button>
                                    </div>
                </div>
            </div>
        </section>
        <section id="startupsection" style="display:none;">
            <a href="#" class="float st">
                <i class="fa fa-chevron-circle-left my-float"></i>
            </a>
            <div style="color: #777;background-color:white;text-align:center;padding:50px 15px;text-align: left;">
                <h2 style="text-align:center;">Start-up Camp</h2>
                <div class="text-center"><img src="/images/Event-04.png" class="img img-responsive" /></div>
                <p style="color:black;">Entrepreneurship cell wants to organize a Startup Camp which will promote entrepreneurship among students and also provide a start-up initiative activity with help of NIT Raipur. It basically involves everyone in and around Chhattisgarh with small and budding start-ups and people involved with it. The Startup Camp will help all the entrepreneur of college to get some ideas and how to implement their ideas. E-Cell will require the help of NIT Raipur administration to effectively organize the Event-0. It will help us create a better image of NIT Raipur in Industry as a start-up promoting institute.
                    <p style="color:black;">E-Cell aims to adhere to the vision of our honorary Prime Minister “Mr. Narendra Modi” who has started an initiative called “Start-up India Stand Up India”. Startup Camp will connect entrepreneur from budding startup in and around Chhattisgarh with the fresh entrepreneurs of our college. This will help the young minds to explore their knowledge. Startup Camp will help to create direct channel for start-ups with public and public with startup. Few out of many invited start-ups will be selected to present their work experience with their project and will share the hardship and difficulties related with their startup.
            </div>
            <div style="position:relative;">
                <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 15px;text-align: left;">
                    <div class="text-center">
                        <h2>Need</h2>
                        <hr style="width:20%;">
                        <br>
                        <br>
                    </div>
                    <p>Start-up Camp is needed because of the following reason-:
                        <ol>
                            <li> To know what actually entrepreneurship is.</li>
                            <li>Provides the required details about a business such as target audience, competitors and scope in future</li>
                            <li>Helps evaluate a startup effectively</li>
                            <li>To get knowledge about Startup</li>
                            <li>It contains all the relevant information and idea that is needed to make a business model.</li>
                        </ol>
                        <p>Well established E-Cells such as those of IIT Kharagpur and IIT Bombay yearly organize a Business Model competition and it has proved effective in yielding out entrepreneurs from the respective regions of these colleges. E-Cell NIT Raipur looks forward to replicate the same.
                            <p>Target Population of Camp is fresh entrepreneurs and college students. They usually cannot implement to the ideas in early stages of their start-ups and this usually leads to less than expected result. This camp aims to remove this problem as its primary focus. Also by utilizing the hype generated by this Event-0 E-Cell NIT Raipur will be able to generate a startup culture environment in NIT Raipur which will help NIT improve its image among other NITs.
                </div>
            </div>
            <hr>

            <div style="position:relative;">
                <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 15px;text-align: left;">
                    <div class="text-center">
                        <h2>Goals/Objectives</h2>
                        <hr style="width:20%;">
                        <br>
                        <br>
                    </div>
                    <p>Startup camp’s mission is to kick start new student-run companies and to built entrepreneurial capabilities in students and their university communities
                        <ul>
                            <li>Promoting Startup Culture</li>
                            <li>Promote competitive nature between start-ups</li>
                            <li>Promote Entrepreneurship</li>
                            <li>Connecting new entrepreneur with different start-ups</li>
                            <li>Promoting the start-ups</li>
                            <li>Take NIT Raipur to higher level by organizing Startup Camp thereby improving its rating</li>
                        </ul>
                </div>
            </div>
            <hr>
            <div style="position:relative;">
                <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 15px;text-align: left;">
                    <div class="text-center">
                        <h2>Procedures/Scope of Work</h2>
                        <hr style="width:20%;">
                        <br>
                        <br>
                    </div>
                    <ol>
                        <li>Startup Camp will help to interact Startup with Startup</li>
                        <li>Startup Camp will bring Chhattisgarh’s great makers, dreamers, thinkers and doers together at college campus</li>
                        <li>Presentation of startup-: The shortlisted startup will give a presentation about their start-ups .</li>
                        <li>The few selected students from college will get opportunity to work with various start-ups as an intern.</li>
                    </ol>
                    <br>
                    <div class="text-center">
                        <button type="button" class="btn-lg btn-primary">Registation coming soon</button>
                    </div>
                </div>
            </div>
        </section>
        <section id="ignitionsection" style="display:none;">
            <a href="#" class="float ig">
                <i class="fa fa-chevron-circle-left my-float"></i>
            </a>
            <div style="color: #777;background-color:white;text-align:center;padding:50px 15px;text-align: left;">
                <h2 style="text-align:center;">IGNITION: Business-Model Competition</h2>
                <div class="text-center"><img src="/images/Event-06.png" class="img img-responsive" /></div>
                <p style="color:black;">“Ignition” is a Business Model competition that will connect ideas of Entrepreneurs with Investors. This will help the start-ups to gain traction and also provide an opportunity to be funded by some of the top investors in India. A Business Model competition aims to connect the new start-ups with investors by creating a direct channel between them. Basically in a B-Model completion the start-up founders/Entrepreneurs are required to make a report on their organization. The report includes what is the organization working on? What is their market audience? What is the revenue they are earning? What are the future prospects? Who are the competitors in same market? How much employment will it create? Is it feasible in current market?
                    <p style="color:black;">The report is then evaluated and the selected start-ups are invited for a pitch to the investors. They are also provided a mentorship for 1 month. After which final result are published by the investors and judges and the winning team get a funding to push their startup. The accommodation and hospitality of start-ups for the final round is taken care by the institute.
            </div>
            <div style="position:relative;">
                <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 15px;text-align: left;">
                    <div class="text-center">
                        <h2>Need</h2>
                        <hr style="width:20%;">
                        <br>
                        <br>
                    </div>
                    <p>Business Model is needed because of the following reason-:
                        <ol>
                            <li>Provides clarity about a business</li>
                            <li>Provides the required details about a business such as target audience, competitors and scope in future</li>
                            <li>Helps evaluate a startup effectively</li>
                            <li>Valuations of companies are done according to a business model</li>
                            <li>It contains all the relevant information that is needed by an investor.</li>
                        </ol>
                        <p>Well established E-Cells such as those of IIT Kharagpur and IIT Bombay yearly organize a Business Model competition and it has proved effective in yielding out entrepreneurs from the respective regions of these colleges. E-Cell NIT Raipur looks forward to replicate the same.
                            <p>Target Population of competition is budding entrepreneurs. They usually cannot get connected to an investor in early stages of their start-ups and this usually leads to a less than expected result. This competition aims to remove this problem as its primary focus. Also by utilizing the hype generated by this Event-0 E-Cell NIT Raipur will be able to generate a startup culture environment in NIT Raipur which will help NIT improve its image among other NITs

                </div>
            </div>
            <hr>
            <div style="position:relative;">
                <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 15px;text-align: left;">
                    <div class="text-center">
                        <h2>Goals/Objectives</h2>
                        <hr style="width:20%;">
                        <br>
                        <br>
                    </div>
                    <ul>
                        <li>Connect Start-ups with investor</li>
                        <li>Promote competitive nature between start-ups</li>
                        <li>Promote Entrepreneurship</li>
                        <li>Provide knowledge about nuances of Managing and Operating a startup</li>
                        <li>Develop a start-up culture</li>
                        <li>Connecting general public with different start-ups</li>
                        <li>Promoting the start-ups</li>
                        <li>Take NIT Raipur to higher level by organizing Business Model competition thereby improving its rating</li>
                    </ul>
                </div>
            </div>
            <hr>
            <div style="position:relative;">
                <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 15px;text-align: left;">
                    <div class="text-center">
                        <h2>Procedures/Scope of Work</h2>
                        <hr style="width:20%;">
                        <br>
                        <br>
                    </div>
                    <p>Business Model competition will consist of the following Procedures -:
                        <ol>
                            <li>Workshop on effective B-Model writing -: A workshop will be organized prior to the release of B-model competition. This workshop will be based on how to write an effective Business Model. This workshop will help new entrepreneurs learn how to write an effective report so as to earn investment and win the B-Model competition. It will cover what the investors look in a report and how they want to perceive it to understand it effectively.
                            </li>
                            <li>Report Submission -: Entrepreneurs will submit a B-Model report and this report will be evaluated by a panel of expert investors. Shortlisted start-ups will be contacted for further process
                            </li>
                            <li>Presentation and Pitch -: The shortlisted team will give a presentation about their start-ups . They will also be allowed to pitch for investment to the investors. Investors will shortlist the teams for further process
                            </li>
                            <li>Mentor Session -: Investors will mentor the start-ups for 1 month before deciding the final result.
                            </li>
                            <li>Result -: The winning team will get investment from the investors. E-Cell will help arrange all the formalities.</li>
                        </ol>
                        <br>
                        <div class="text-center">
                            <button type="button" class="btn-lg btn-primary">Registation coming soon</button>
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
                        <span><strong>Monday - Thursday:</strong>10AM-5PM</span>
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
@endsection

@section("scripts")
<script>
    // var loadEvents = function() {
    //     $("#events_navbar").addClass("active");
    //     $.ajax({
    //             url: '/events/get_events_list',
    //             success: function(data){
    //                 var container = $('#events_container');
    //                 var container_indicator = $('#events_indicator');
    //                 var slide = '';
    //                 var indicator = '';
    //                 for(i in data){
    //                     if(i != 0){
    //                             //slide += "<div class=\"item item"+(parseInt(i)+1)+" active\">";
    //                             //indicator = "<li data-target=\"#myCarousel\" data-slide-to=\""+i+"\" class=\"active\"></li>";

    //                         slide += "<div class=\"item item"+(parseInt(i)+1)+"\">";
    //                         indicator += "<li data-target=\"#myCarousel\" data-slide-to=\""+i+"\"></li>";
    //                         slide += "<div class=\"fill\" style=\" background-color:#48c3af;\">";
    //                         slide += "<div class=\"inner-content\">";
    //                         slide += "<div class=\"carousel-img\">";
    //                         slide += "<img src=\"/uploads/events/"+ data[i]['meta'] +"\" class=\"img img-responsive\" />";
    //                         slide += "</div>";
    //                         slide += "<div class=\"carousel-desc\">";
    //                         slide += "<h2>"+data[i]['title']+"</h2><p>";
    //                         slide += data[i]['description'];
    //                         slide += "</p>";
    //                         slide += "<button type=\"button\" class=\"btn btn-primary\" id=\"startup\">Read more</button>";
    //                         slide += "</div></div></div></div>";
    //                         console.log(i);
    //                     }
    //                 }
    //                 console.log(slide);
    //                 container.append(slide);
    //                 container_indicator.append(indicator);
    //                 $('#myCarousel').carousel();
    //             },
    //             error:function(){
    //                 alert("It seems like you are not connected to the internet");
    //             }
            
    //         });
    //         $('#myCarousel').carousel({
    //             interval:5000
    //         }); 
    //     }
</script>
@endsection
