@extends('layouts.app')
@section('title', 'Events')

@section('content')
@parent
<section class="slide-wrapper">
    <div class="container">
        <div id="myCarousel" class="carousel slide">
            <!-- Indicators -->
            <ol class="carousel-indicators" id="events_indicator">
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" id="event_container">
            </div>
        </div>
    </div>
</section>
<script>
$(document).ready(function(){
    $.ajax({
        url: 'events/get_events_list',
        success: function(data){
            var container = $('#event_container');
            var container_indicator = $('#events_indicator');
            var slide, indicator;
            for(i in data){
                if(i == 0){
                    slide += "<div class=\"item item"+i +" active\">";
                    indicator = "<li data-target=\"#myCarousel\" data-slide-to=\""+i+"\" class=\"active\"></li>";
                }else{
                    slide += "<div class=\"item\">";
                    indicator += "<li data-target=\"#myCarousel\" data-slide-to=\""+i+"\"></li>";
                }
                slide += "<div class=\"fill\" style=\" background-color:#48c3af;\">";
                slide += "<div class=\"inner-content\">";
                slide += "<div class=\"carousel-img\">";
                slide += "<img src=\"/uploads/events/"+ data[i]['meta'] +"\" class=\"img img-responsive\" />";
                slide += "</div>";
                slide += "<div class=\"carousel-desc\">";
                slide += "<h2>"+data[i]['title']+"</h2><p>";
                slide += data[i]['details'];
                slide += "</p></div></div></div></div></div>";
            }
            console
            container.html(slide);
            container_indicator.html(indicator);
        },
        error:function(){
            alert("It seems like you are not connected to the internet");
        }
    });
});
</script>
@endsection
