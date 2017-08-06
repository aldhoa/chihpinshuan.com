var setElementHeight = function() {
	var height = $(window).height();
	$('#content').css('min-height', (height));
};

$(window).on('resize', function(){
	setElementHeight();
}).resize();