$(function() {
	// Hides programme descriptions and series info on page load
	jQuery('.description').hide();
	jQuery('.series').hide();
	// If peaktime programme (or in detail), display description
	jQuery('.peaktime .description').show();
	jQuery('.peaktime .series').show();
	jQuery('#programmeDetail .description').show();
	jQuery('#programmeDetail .series').show();
	// Enables programmes that run into another hour to remain visible as users pan down the page
	$('.overAnHour').jScroll({
		speed: "slow",
		top: 195
	});
	// Enable user to switch between Day/Night mode
    jQuery('#toggleDay').click(function(e) {
    	jQuery('#mask').removeClass('theatreMode');
    	jQuery('#toggleNight').removeClass('selected'); 
	    jQuery(this).addClass('selected');
	    e.preventDefault();
	});
	jQuery('#toggleNight').click(function(e) {
	    jQuery('#mask').addClass('theatreMode');
		jQuery('#toggleDay').removeClass('selected');
	    jQuery(this).addClass('selected');
	    e.preventDefault();
	});
	// Show more information when user 'touches' programme
	jQuery('.channel').click(function(e) { 
	    jQuery(this).children('div').toggleClass('inDetail');
	    e.preventDefault();
	});
	//Show more/less columns
	jQuery('#toggleFour').click(function(e) {
    	jQuery('body').addClass('wide');
    	jQuery('#hideWhenWideCol').toggleClass('hide');
    	jQuery('#toggleFive').removeClass('selected'); 
	    jQuery(this).addClass('selected');
	    e.preventDefault();
	});
	jQuery('#toggleFive').click(function(e) {
	    jQuery('body').removeClass('wide');
		jQuery('#toggleFour').removeClass('selected');
	    jQuery(this).addClass('selected');
	    e.preventDefault();
	});
	// Enable user to toggle programme descriptions
	jQuery('#descriptionMode').click(function(e) {
	    jQuery('.description').slideToggle( 400 );
	    jQuery('.series').slideToggle( 400 );
	    e.preventDefault();
	});
	
	// In detail programme features
	
	// Hide in detail view initially
	jQuery('#programmeMask').hide();
	jQuery('#programmeWebViewBox').hide();
	// Open in detail view
	jQuery('.film').click(function(e) {
	    jQuery('#programmeMask').fadeIn();
	    e.preventDefault();
	});
	// Close in detail view
	jQuery('#progBckgrd').click(function(e) {
	    jQuery(this).parent().parent().fadeOut();
	    e.preventDefault();
	});
	jQuery('#closeProgWebViewBox').click(function(e) {
	    jQuery(this).parent().fadeOut();
	    jQuery('#programmeColumn').animate({
			left: '50%'
		});
	    e.preventDefault();
	});
	// Control transition when user 'touches' to view more about programme
	jQuery('#programmeDetail .sites a').click(function(e) {
		jQuery('#programmeWebViewBox').fadeIn();
		jQuery('#programmeColumn').animate({
			left: '17%'
		});
		jQuery('#programmeWebView').animate({
			left: '100px'
		});
		e.preventDefault();
	});
	// Instigate sliding units within programme in detail panel
	jQuery('#aboutTab').click(function(e) {
		jQuery('.columnContainer').animate({
			left: '0px'
		});
		jQuery('.tabs li a').removeClass('selected');
		jQuery(this).addClass('selected');
		e.preventDefault();
	});
	jQuery('#castTab').click(function(e) {
		jQuery('.columnContainer').animate({
			left: '-235px'
		});
		jQuery('.tabs li a').removeClass('selected');
		jQuery(this).addClass('selected');
		e.preventDefault();
	});
	jQuery('#webTab').click(function(e) {
		jQuery('.columnContainer').animate({
			left: '-470px'
		});
		jQuery('.tabs li a').removeClass('selected');
		jQuery(this).addClass('selected');
		e.preventDefault();
	});
	// Instigate sliding units on home page
	jQuery('#toggleFilm').click(function(e) {
		jQuery('#scrollHorz').animate({
			left: '0px'
		});
		jQuery('#controls li a').removeClass('selected');
		jQuery(this).addClass('selected');
		e.preventDefault();
	});
	jQuery('#toggleComedy').click(function(e) {
		jQuery('#scrollHorz').animate({
			left: '-290px'
		});
		jQuery('#controls li a').removeClass('selected');
		jQuery(this).addClass('selected');
		e.preventDefault();
	});
	jQuery('#toggleSport').click(function(e) {
		jQuery('#scrollHorz').animate({
			left: '-580px'
		});
		jQuery('#controls li a').removeClass('selected');
		jQuery(this).addClass('selected');
		e.preventDefault();
	});
	jQuery('#toggleDocs').click(function(e) {
		jQuery('#scrollHorz').animate({
			left: '-870px'
		});
		jQuery('#controls li a').removeClass('selected');
		jQuery(this).addClass('selected');
		e.preventDefault();
	});
});
// Trying to get a 24hr feature working...
/*
$(function() {
	var currentValue = $('.progHour').text();
	var newValue = parseInt(currentValue) + 12

	jQuery('.dateSelected').click(function(){
		jQuery('.progHour').text(newValue);
	});
});
*/