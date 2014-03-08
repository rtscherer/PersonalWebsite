$(document).ready(function(){
	
	// navigation
	$('.button').mouseenter(function() {
		$(this).fadeTo('fast', 0.8);
	});
	$('.button').mouseleave(function() {
		$(this).fadeTo('fast', 1);
	});
	
	// social media
	$('.socialmedia').mouseenter(function() {
		$(this).fadeTo('fast', 1);
	});
	$('.socialmedia').mouseleave(function() {
		$(this).fadeTo('fast', .2);
	});
	
	// scrolling page functionality
	function scrollToPage(anchor_id) {
    	var anchor = $("a[name='"+ anchor_id +"']");
    	$('html,body').animate({scrollTop: anchor.offset().top},'slow');
	}
	$("#home_button").click(function() {
   		scrollToPage('home');
	});
	$("#about_button").click(function() {
   		scrollToPage('about');
	});
	$("#contact_button").click(function() {
   		scrollToPage('contact');
	});
	
	//$('.formbutton').click(function(){
	//	$('.spinner').css('display', 'inline');
	//});
});