$(document).ready(function () {
// Toggle Jesus
    $('.toggle div').click(function(e){
	    $(this).toggleClass('flipped');
	    e.preventDefault();
    });
    $('.toggleJesus').click(function(e){
    	$('.front').animate({
			"left": "300px"
		}, 500);
	    e.preventDefault();
    });
    $('.toggleSusej').click(function(e){
    	$('.front').animate({
			"left": "0"
		}, 500);
	    e.preventDefault();
    });
});