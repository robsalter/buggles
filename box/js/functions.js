$(document).ready(function () {

	// Appends classes for activing CSS transitions
	// Should improve performance
	$('.exposeBack').click(function(e){
		$('.front').toggleClass('backExposed');
		$('.wrapper > header').toggleClass('headerMoved');
		e.preventDefault();
	});
	// Expose overlay
	$('article').click(function(e){
		$('.overlay').addClass('overlayExposed');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('.closeOverlay').click(function(e){
		$('.overlay').removeClass('overlayExposed');
		$('article').removeClass('active');
		e.preventDefault();
	});
	$('.exposeCalendar').click(function(e){
		$('.container').toggleClass('active');
		$('.calendar').toggleClass('active');
		//$('.exposeBack').parent().parent().toggleClass('calendarExposed');
		// switch off exposeBack
		e.preventDefault();
	});

	// Temporary measure until how to let user switch between columns is figured out
	$('.exposeColumns').click(function(e){
		$('.channels').css({
	    	'width':'100%'
    	});
		e.preventDefault();
	});

    // Helps keep channel names in view, doesn't work so well on phones :(
   
    // seems to work quite well, although not when scrolling up
    //$('.channel>h1').jScroll({speed : 200, top: 55});

    // Performance depletion specialist codeage
	$('.channels>ul').scroll(function (e) {
    	var elementScrollTop = $('.channels>ul').scrollTop();
    	$('.channel>h1').css({
        	"top" : + elementScrollTop
    	});
    	e.preventDefault();
    });
    
	// Change into 12/24 hour times + change theme   

	$('.l-theme').click(function(e) {
		$('body').removeClass('dark');
		$(this).attr('disabled', true).siblings('button').attr('disabled', false);
		e.preventDefault();
	});
	$('.d-theme').click(function(e) {
		$('body').addClass('dark');
		$(this).attr('disabled', true).siblings('button').attr('disabled', false);
		e.preventDefault();
	});
	
	//$('.sd-time').hide();
	$('.sd-time').click(function(e) {
		$('.hour').each(function() {
			var currentValue = $(this).text();
			var newValue = parseInt(currentValue) - 12;
			$(this).text(newValue);
		});
		$(this).attr('disabled', true).siblings('button').attr('disabled', false);
		e.preventDefault();
	});
	// Doesn't work for AM times (they'll get changed as well!)
	$('.dd-time').click(function(e) {
		$('.hour').each(function() {
			var currentValue = $(this).text();
			var newValue = parseInt(currentValue) + 12;
			$(this).text(newValue);
		});
		$(this).attr('disabled', true).siblings('button').attr('disabled', false);
		e.preventDefault();
	});
	
	// Probably not optimised (and overly complicated), but I wrote some JS and it flippin' worked!!!
	// Target channel lists (but per row, rather than using global content to inform all rows + cols)

	$('.channel .gutter').each(function() {
		// Loop for each hour of day
		for (var i = 1; i <= 288; i++) {
			// Target only direct children, load into variable
			var nth = $(this).find('> :nth-child(' + [i] +')')
			// Use looping variable to add hourly class name
			$(nth).addClass('m' + '-' + [i]);
			// Var up max height
			var maxHeight = -1;
			// Use looping number to fix heights in each hour row based on its longest piece of content
			$('.m-' + [i]).each(function() {
				maxHeight = maxHeight > $(this).height() ? maxHeight : $(this).height();
			});
			$('.m-' + [i]).each(function() {
				$(this).height(maxHeight);
			});
		}
	});
	
	// Add class to '.m-group's that have a programme in them	
	$('.m-group').children('article').parent().addClass('programme');

	// If programme starts at 00 (on the hour) add relevant class
	$('.programme').each(function() {
		var minutes = $(this).find('.minutes').text();
		if (minutes == 0) {
			$(this).addClass('on-the-hour');
		}
	});
	
	// I flippin' did it! What a difference two weeks' holiday makes!!!!!!!! Get in!!!!!!! :)
	// This finds out empty heights (used to align progs) and adds it to the previous prog, then iterates thru grid
	$('.programme').siblings().nextUntil('.programme').each(function() {
		var total = $(this).height();
		//console.log(total);
		var sum = total;
			sum - total;
		//console.log(sum);
		$(this).prev('.programme').css('height', '+=' + sum);
		$(this).remove();
	});
	
	// Uses plugin to keep programme details in view when user scrolls down to see suceeding progs
	// Now works awesomely!
	$('.m-group').ready(function(){
		var height = $(this).height();
		if (height > 100) {
			$('.front article dl').jScroll({speed : 200, top: 85});
		}
	});
	
	// Removes all those '.m-group' divs from the DOM that have no content/height
	$('.m-group').each(function(){
		var height = $(this).height();
		if (height == 0) {
			$(this).remove();
		}
	});
		
	/*
		- PROG GENRES -- for adding to aid easier sight of films, news etc
		- - - - - - - - - - - -
		- Adds HTML that contains necessary classes for hooking into font-awesome fonts and CSS
	*/
	
	$('.film').each(function() {
		$(this).children().children('dt').prepend(' <i class="icon-film"></i>');
	});
	$('.sport').each(function() {
		$(this).children().children('dt').prepend(' <i class="icon-trophy"></i>');
	});
	$('.news').each(function() {
		$(this).children().children('dt').prepend(' <i class="icon-quote-right"></i>');
	});
	$('.quiz').each(function() {
		$(this).children().children('dt').prepend(' <i class="icon-comment-alt"></i>');
	});
	$('.food').each(function() {
		$(this).children().children('dt').prepend(' <i class="icon-food"></i>');
	});
});