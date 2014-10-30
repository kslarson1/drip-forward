// -- Set Dynamic Heights and CSS -- //
$(document).ready(function(){
  resizeDiv();
});
window.onresize = function(event) {
  resizeDiv();
};
function resizeDiv() {
  vpw = $(window).width(); // Viewport Width
  vph = $(window).height(); // Viewport Height

  headerH = $('#masthead').height();

    // Your Styles
    // My Style 1
    $('.full-width').css({'height': vph - headerH + 'px'});
    $('.full-width h1').css({'margin-top': (vph / 1.75) * 0.2 + 'px'});

     // My style 2
	$('#what_section').css({'height': (vph / 1.7) - headerH + 'px'});
	$('#why_section').css({'height': (vph / 1.6) - headerH + 'px'});
	
	
	// Portfolio Thumbnails
	portW = $('.portfolio-thumb').width(); //Portfolio thumbnail width
	$('.portfolio-thumb').css({height: portW + 'px'}); // Setting the height of the thumbnail equal to the width (square)
}