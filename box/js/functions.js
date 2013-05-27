$(document).ready(function () {
    loadAll();
});

var loaded = 0; day = 'today', now = new Date(), activeChannel = 1, cache = {}, uris = {
    bbc1: {uri:'bbcone', regions: ['london'], color:'#df180e'}, 
    bbc2: {uri:'bbctwo', regions: ['england','wales','scotland','ni','hd'], color:'#01454e'},
    bbc3: {uri:'bbcthree', regions: [], color:'#450e38'},
    bbc4: {uri:'bbcfour', regions: [], color:'#000000'},
    cbbc: {uri:'cbbc', regions: [], color:'#ff0000'},
    cbeebies: {uri:'cbeebies', regions: [], color:'#ff0000'},
    parliament: {uri:'bbc_parliament', regions: [], color:'#ff0000'},
    news: {uri:'bbcnews', regions: [], color:'#ff0000'}
};

var loadAll = function () {
    var uri;
    for (uri in uris) {
        getList(uri, true);
    }
}

var getList = function (channel, hide) {
  var h = '', dt, uri = uris[channel].uri, reg = uris[channel].regions[0] || '';
  if (!cache[channel]) {
    $.ajax({url:'services/l.php', data:{uri:uri, day:day, region:reg}, type:'POST'}).done(function(d) {
      cb(d, channel, hide);
      cache[channel] = d;
      checkDone();
    });
  }
  else {
    cb(cache[channel], channel, hide);
  }
}

var checkDone = function() {
    loaded++;
    if (loaded === 8) {
        init();
    }
}

var cb = function (d, c, hide) {
  var h = '', x, y, ipLnk, dt, s, i;
  for (x in d) {
    y = d[x];
    s = y.duration/300;
    ipLnk = y.programme.is_available_mediaset_pc_sd ? '<a href="http://www.bbc.co.uk/iplayer/episode/' + y.programme.pid +'">Catch-up</a>' : '';
    dt = new DateObj(y.start);
    h += '<div class="m-group"><article class="' + c + '-' + x +'"><dl><dt>' + y.programme.display_titles.title + '</dt>';
    h += '<dd class="p-time"><span class="hour">' + dt.hh + '</span>:<span class="minutes">' + dt.mm + '</span></dd></dl>';
    h += '<ul class="extras"><ul><li class="replay">' + ipLnk + '</li></ul></article></div>';
    for (i = 1; i <= s; i++) {
      h += '<div class="m-group"></div>';
    }
  }
  if (!cache[c]) {
    $('#' + c).append(h);
  }
}

DateObj = function (s) {
  var bits  = s.split('T'),
  date = bits[0].split('-');
  time = bits[1].split(':');
  
  this.yyyy = date[0];
  this.MM = date[1];
  this.dd = date[2];
  this.hh = parseInt(time[0]);
  this.ampm = this.hh >=12 ? 'pm' : 'am';
  this.mm = time[1];
  this.str = this.dd + ' ' + this.MM + ' ' + this.yyyy + ' ' + this.hh + ' ' + this.mm;
  this.t = (this.hh >=12 ? this.hh - 12 : this.hh) + ':' + this.mm + this.ampm;
  //this.tense = function(){alert('hello')};
}

var init = function() {
	// Appends classes for activing CSS transitions
	// Should improve performance
	$('.exposeBack').click(function(e){
		$('.front').toggleClass('backExposed');
		$('.wrapper > header').toggleClass('headerMoved');
		e.preventDefault();
	});
	// Expose overlay
	$('article').click(function(e){
    var cl = $(this).attr('class').split('-'), o = cache[cl[0]][cl[1]];
		e.preventDefault();
    console.log(o);
		$('.overlay').addClass('overlayExposed');
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
	// Will work awesomely once programme div can expand into available true prog space/height
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
		Somehow we need to find out the heights of the remaining divs with height more than 0
		Take those values and add them to the '.programme' elements existing heights
		Then remove those excess divs from the DOM
		That way, once achieved, all that remains are the visible programmes which will then fill the available space and keep the layout/order
		
		Below is my shoddy attempt at trying to do this... here my jQuery/JS knowledge sucks...
	*/

	var list = [];
	$('.programme').siblings().nextUntil('.programme', function() {
		var total = $(this).height();
		console.log(total);
		//total += parseInt(list[total]);
		list.push(total);
		console.log(list);
	});


    
	/*
	
	// crap JS by Salter
	
$('.actively').siblings().nextUntil('.actively').end().each(function() {
		
		
			var total = $(this).height();
			console.log(total);
			list.push(total);
		var sum = total;
		sum += total;
		console.log(sum);
	});
*/

	
	
	/*
var total = 0;
	for (var i = 0; i < list.length; i++) {
	    total += parseInt(list[i]);
	}
	
	console.log(total);
*/
	
	/*
var someArray = [];
	var total = 0;
	
	$('.actively').siblings().nextUntil('.actively').each(function() {
		var total = 0;
		total += $(this).height();
	});
	
	
for (var i = 0; i < someArray.nextUntil('.actively'); i++) {
    total += parseInt(someArray[i]);
}
*/
	
	
	
	
	
	/*
$('.actively').siblings().nextUntil('.actively').each(function() {
		var total = 0;
		total += $(this).height();
		console.log(total);
	});
*/
	

/*


		//$(this).siblings('article');
		
		// var totalheights = $
		// var nextprog = $(this).siblings().next('article');
	});
*/
	
	// Target only those articles that start after the hour, whack on some silage
	// Now pointless and defunct
	/*
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
*/
	
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
	
};
