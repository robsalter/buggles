jQuery(document).ready(function () {
	// Toggle drawer
	jQuery('.container').hide();
    jQuery('.toggle').click(function(e){
    	jQuery(this).next().slideToggle(400);
	    e.preventDefault();
    });
});	