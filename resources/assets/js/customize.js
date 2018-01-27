/*
jQuery(window).load(function(){*/

	//Adjusting the height of front screen:
	var screenHeight = jQuery(window).height();
	jQuery('.background-head').height(screenHeight);

	//FirstSlider:
	var equalSlider = jQuery('.slider-content').height();
	var marginTop = (screenHeight - equalSlider) / 3; 
	jQuery('.slider-content').css("margin-top", marginTop+"px");
	/*jQuery('.background-head img').width( jQuery(window).width() );*/
/*});*/