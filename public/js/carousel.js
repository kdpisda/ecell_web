$(document).ready(function(){
// invoke the carousel
//loadEvents();
});
//animated  carousel start
$(document).ready(function(){
//to add  start animation on load for first slide 
$(function(){
		$.fn.extend({
			animateCss: function (animationName) {
				var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
				this.addClass('animated ' + animationName).one(animationEnd, function() {
					$(this).removeClass(animationName);
				});
			}
		});
			 $('.item1.active img').animateCss('slideInDown');
			 $('.item1.active h2').animateCss('zoomIn');
			 $('.item1.active p').animateCss('fadeIn');
			 
});
	
//to start animation on  mousescroll , click and swipe
     $("#myCarousel").on('slide.bs.carousel', function () {
		$.fn.extend({
			animateCss: function (animationName) {
				var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
				this.addClass('animated ' + animationName).one(animationEnd, function() {
					$(this).removeClass(animationName);
				});
			}
		});
	
// add animation type  from animate.css on the element which you want to animate

		$('.item1 img').animateCss('slideInDown');
		$('.item1 h2').animateCss('zoomIn');
		$('.item1 p').animateCss('fadeIn');
		
		$('.item2 img').animateCss('zoomIn');
		$('.item2 h2').animateCss('swing');
		$('.item2 p').animateCss('fadeIn');
		
		$('.item3 img').animateCss('slideInDown');
		$('.item3 h2').animateCss('zoomIn');
		$('.item3 p').animateCss('fadeIn');
		
		$('.item4 img').animateCss('zoomIn');
		$('.item4 h2').animateCss('swing');
		$('.item4 p').animateCss('fadeIn');
		
		$('.item5 img').animateCss('slideInDown');
		$('.item5 h2').animateCss('zoomIn');
		$('.item5 p').animateCss('fadeIn');
		
		$('.item6 img').animateCss('zoomIn');
		$('.item6 h2').animateCss('swing');
		$('.item6 p').animateCss('fadeIn');
		
    });
$('.btn:not(#quiz,.login,.lo,.go)').click(function(){
	$("#myCarousel").slideUp(1000);
	
});
$('#startup').click(function() {
  $("#utkrishthsection").hide(1000);
  $("#bquizsection").hide(1000);
  $("#wallstreetsection").hide(1000);
  $("#cricknometricsection").hide(1000);
  $("#ignitionsection").hide(1000);
  $("#startupsection").show(1000);
});
$('#wall').click(function() {
  $("#startupsection").hide(1000);
  $("#cricknometricsection").hide(1000);
  $("#ignitionsection").hide(1000);
  $("#utkrishthsection").hide(1000);
  $("#bquizsection").hide(1000);
  $("#wallstreetsection").show(1000);

});
$('#cric').click(function() {
  $("#startupsection").hide(1000);
  $("#ignitionsection").hide(1000);
  $("#utkrishthsection").hide(1000);
  $("#bquizsection").hide(1000);
  $("#wallstreetsection").hide(1000);
  $("#cricknometricsection").show(1000);
});
$('#ignition').click(function() {
  $("#startupsection").hide(1000);
  $("#utkrishthsection").hide(1000);
  $("#bquizsection").hide(1000);
  $("#wallstreetsection").hide(1000);
  $("#cricknometricsection").hide(1000);
    $("#ignitionsection").show(1000);

});
$('#uth').click(function() {
   $("#startupsection").hide(1000);
  $("#startupsection").hide(1000);
  $("#bquizsection").hide(1000);
  $("#wallstreetsection").hide(1000);
  $("#cricknometricsection").hide(1000);
    $("#ignitionsection").hide(1000);
	$("#utkrishthsection").show(1000);
});
$('.ut').click(function() {
	$("#myCarousel").show(1000);
	$("#utkrishthsection").hide(1000);
});
$('.cr').click(function() {
	$("#myCarousel").show(1000);
	$("#cricknometricsection").hide(1000);
});
$('.wa').click(function() {
	$("#myCarousel").show(1000);
	$("#wallstreetsection").hide(1000);
});
$('.ut').click(function() {
	$("#myCarousel").show(1000);
	$("#utkrishthsection").hide(1000);
});
$('.st').click(function() {
	$("#myCarousel").show(1000);
	$("#startupsection").hide(1000);
});
$('.ig').click(function() {
	$("#myCarousel").show(1000);
	$("#ignitionsection").hide(1000);
});
});