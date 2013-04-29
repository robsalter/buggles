$(document).ready(function () {

	// Appends classes for activing CSS transitions
	// Should improve performance
	$('.exposeBack').click(function(e){
		$('.front').toggleClass('backExposed');
		$('.wrapper > header').toggleClass('headerMoved');
		e.preventDefault();
	});
	$('.exposeOverlay').click(function(e){
		$('.overlay').addClass('overlayExposed');
		e.preventDefault();
	});
	$('.closeOverlay').click(function(e){
		$('.overlay').removeClass('overlayExposed');
		e.preventDefault();
	});
	$('.exposeCalendar').click(function(e){
		$('.container').toggleClass('active');
		$('.calendar').toggleClass('active');
		//$('.exposeBack').parent().parent().toggleClass('calendarExposed');
		// switch off exposeBack
		e.preventDefault();
	});

	// Temporary scroll readout    
    $('#result').click(function(e){
    	$('.channels').css({
	    	'width':'100%'
    	});
	    e.preventDefault();
    });

    // Helps keep channel names in view, doesn't work so well on phones :(
	$('.channels>ul').scroll(function (e) {
    	var elementScrollTop = $('.channels>ul').scrollTop();
    	$('.channel>h1').css({
        	"top" : + elementScrollTop
    	});
    	$("#result").html("scrollTop: <span>" + elementScrollTop + "</span>");
    	e.preventDefault();
    });
    
	// Change into 12/24 hour times
	$('.sd-time').hide();
	$('.sd-time').click(function(e) {
		$('.hour').each(function() {
			var currentValue = $(this).text();
			var newValue = parseInt(currentValue) - 12;
			$(this).text(newValue);
		});
		$(this).hide();
		$('.dd-time').show();
		e.preventDefault();
	});
	// Doesn't work for AM times (they'll get changed as well!)
	$('.dd-time').click(function(e) {
		$('.hour').each(function() {
			var currentValue = $(this).text();
			var newValue = parseInt(currentValue) + 12;
			$(this).text(newValue);
		});
		$(this).hide();
		$('.sd-time').show();
		e.preventDefault();
	});

	// I know it does something, I just don't know what...
	
	$('.h-group').each(function() {
		var articles = $(this).find('article').length;
		if (articles == 0) {
			$(this).addClass('empty');
		}
		if (articles == 2) {
			$(this).addClass('h-p-two');
		}
		if (articles == 3) {
			$(this).addClass('h-p-three');
		}
		if (articles == 4) {
			$(this).addClass('h-p-four');
		}
		if (articles == 5) {
			$(this).addClass('h-p-five');
		}
	});
	
	// This is a bit crap (JS just below). I'm thinking it's best to not worry about programmes within an hour
	// variations will occur across channels, but more importantly, programmes in the next hour
	// sit in the correct place... not great for usability(?) but works nonetheless...
	
	/*
$('.h-group').each(function() {
		var hump = $(this).find('article').length;
		if (hump >= 2) {
			var total = $(this).find('article:nth-child(2) .minutes').text();
			if (total == 30) {
				$(this).find('article:nth-child(2)').addClass('h-h-prog');
			}
		}
	});
*/
	
	// Probably not optimised (and overly complicated), but I wrote some JS and it flippin' worked!!!
	// Target channel lists (but per row, rather than using global content to inform all rows + cols)
	
	$('.channel .gutter').each(function() {
		// Loop for each hour of day
		for (var i = 1; i <= 24; i++) {
			// Target only direct children, load into variable
			var nth = $(this).find('> :nth-child(' + [i] +')')
			// Use looping variable to add hourly class name
			$(nth).addClass('h' + '-' + [i]);
			// Var up max height
			var maxHeight = -1;
			// Use looping number to fix heights in each hour row based on its longest piece of content
			$('.h-' + [i]).each(function() {
				maxHeight = maxHeight > $(this).height() ? maxHeight : $(this).height();
			});
			$('.h-' + [i]).each(function() {
				$(this).height(maxHeight);
			});
		}
	});
	
	// Target only those articles that start after the hour, whack on some silage
	$('.h-group article:first-child .minutes').each(function() {
		var minsover = $(this).text();
		if (minsover == 5) {
		    $(this).parent().parent().parent().parent().addClass('h-group-overlap h-g-o-five');
	    }
	    if (minsover == 10) {
		    $(this).parent().parent().parent().parent().addClass('h-group-overlap h-g-o-ten');
	    }
	    if (minsover == 15) {
		    $(this).parent().parent().parent().parent().addClass('h-group-overlap h-g-o-fifteen');
	    }
	    if (minsover == 20) {
		    $(this).parent().parent().parent().parent().addClass('h-group-overlap h-g-o-twenty');
	    }
	    if (minsover == 25) {
		    $(this).parent().parent().parent().parent().addClass('h-group-overlap h-g-o-twentyfive');
	    }
	    if (minsover == 30) {
		    $(this).parent().parent().parent().parent().addClass('h-group-overlap h-g-o-thirty');
	    }
	    if (minsover == 35) {
		    $(this).parent().parent().parent().parent().addClass('h-group-overlap h-g-o-thirtyfive');
	    }
	    if (minsover == 40) {
		    $(this).parent().parent().parent().parent().addClass('h-group-overlap h-g-o-forty');
	    }
	    if (minsover == 45) {
		    $(this).parent().parent().parent().parent().addClass('h-group-overlap h-g-o-fortyfive');
	    }
	    if (minsover == 50) {
		    $(this).parent().parent().parent().parent().addClass('h-group-overlap h-g-o-fifty');
	    }
	    if (minsover == 55) {
		    $(this).parent().parent().parent().parent().addClass('h-group-overlap h-g-o-fiftyfive');
	    }
	});
	
	/*
		- PROG GENRES -- for adding to aid easier sight of films, news etc
		- - - - - - - - - - - -
		- Adds HTML that contains necessary classes for hooking into font-awesome fonts and CSS
	*/
	
	$('.film').each(function() {
		$(this).children().children('dt').append('<i class="icon-film"></i>');
	});
	$('.sport').each(function() {
		$(this).children().children('dt').append('<i class="icon-trophy"></i>');
	});
	$('.news').each(function() {
		$(this).children().children('dt').append('<i class="icon-quote-right"></i>');
	});
	$('.quiz').each(function() {
		$(this).children().children('dt').append('<i class="icon-comment-alt"></i>');
	});
	$('.food').each(function() {
		$(this).children().children('dt').append('<i class="icon-food"></i>');
	});
	
	
	
});