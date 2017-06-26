@extends('layouts.app')

@section('title', 'NIT Raipur')

@section('content')

<script type="text/javascript">
    $(document).ready(function(){
        $('#tour_modal').modal('open');
        $('.slider').slider();
        $('.parallax').parallax();
    });
</script>
<div id="tour_modal" class="modal">
    <div class="modal-content">
      <h4>Hello,</h4>
      <p>Why not take a tour.</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action waves-effect waves-green btn-flat">Sure</a>
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">No Thanks</a>
    </div>
</div>
<div class="slider">
    <ul class="slides">
        <li>
            <img src="http://lorempixel.com/580/250/nature/1"> <!-- random image -->
            <div class="caption center-align">
                <h3>E-Summit 2k17</h3>
                <h5 class="light grey-text text-lighten-3">Trek to the zenith of glory</h5>
            </div>
        </li>
        <li>
            <img src="http://lorempixel.com/580/250/nature/2"> <!-- random image -->
            <div class="caption left-align">
                <h3>E-Summit 2k17</h3>
                <h5 class="light grey-text text-lighten-3">Trek to the zenith of glory</h5>
            </div>
        </li>
        <li>
            <img src="http://lorempixel.com/580/250/nature/3"> <!-- random image -->
            <div class="caption right-align">
                <h3>E-Cummit 2k17</h3>
                <h5 class="light grey-text text-lighten-3">Trek to the zenith of glory</h5>
            </div>
        </li>
        <li>
            <img src="http://lorempixel.com/580/250/nature/4"> <!-- random image -->
            <div class="caption center-align">
                <h3>E-Summit 2k17</h3>
                <h5 class="light grey-text text-lighten-3">Trek to the zenith of glory</h5>
            </div>
        </li>s        
    </ul>
</div>
<div class="row">
    <div class="col l4 m4 s12 offset-l1 offset-m1">
        <img src="{{ asset ('images/headset.svg') }}">
    </div>
    <div class="col l6 m6 s12">
        <div class="row">
            <div class="col l12 m12 s12">
                <h4 class="center">OUR VISION</h4>
                <p class="center">
                    Our vision is that entrepreneurship is the next big thing that our country needs to exploit full potential of the innovative youth of the country, promote the economy and raise the overall quality of life in our country. At E-Cell, we try to realise our vision by developing the entrepreneurial environment by providing easy and effective interaction of the student body, experienced professionals, successful entrepreneurs, investors, venture capitalists and corporates.
                </p>
            </div>
        </div>
        <div class="row center">
            <div class="col l4 m4 s4">
                <h5>Entrepreneurship Summit</h5>
            </div>
            <div class="col l4 m4 s4">
                <h5>B-Quiz</h5>
            </div>
            <div class="col l4 m4 s4">
                <h5>Startup Meet</h5>
            </div>
        </div>
    </div>
</div>
<div class="row blue-grey darken-4 white-text">
    <div class="container">
        <div class="row">
            <div class="col l12 m12 s12 center">
                <h5>Our Initiatives</h5>
            </div>
        </div>
        <div class="row center">
            <div class="col l4 m4 s12">
                <h6><strong>E-Summit</strong></h6>
                <p>
                    Entrepreneurship Summit. Spreading the spirit of entrepreneurship!
                </p>
            </div>
            <div class="col l4 m4 s12">
                <h6><strong>B-Quiz</strong></h6>
            </div>
            <div class="col l4 m4 s12">
                <h6><strong>Wallstreet</strong></h6>
            </div>
        </div>
    </div>
</div>
<div class="parallax-container">
  <div class="parallax"><img src="images/sample_pic.png"></div>
</div>
<div class="row">
    <div class="container center">
        <div class="col l3 m3 s12">
            <h4>30000+</h4>
            <p>Applications</p>
        </div>
        <div class="col l3 m3 s12">
            <h4>1800+</h4>
            <p>Ideas</p>
        </div>
        <div class="col l3 m3 s12">
            <h4>150+</h4>
            <p>Sessions</p>
        </div>
        <div class="col l3 m3 s12">
            <h4>210+</h4>
            <p>Motivators</p>
        </div>
    </div>
</div>
@endsection