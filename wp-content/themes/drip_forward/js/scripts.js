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
    // MAKE FULL WIDTH HEIGHT BE FULL VIEWPORT
    $('.full-width').css({'height': vph + 'px'});
    // END OF FULL HEIGHT VIEWPORT

    // MAKE CIRCLE HEIGHT AND WIDTH SAME
	cirW = $('.circle').width();

    $('.circle').css({'height': cirW + 'px'}); // Setting the Height of a class equal to the viewport height divided by 2
    // END OF CIRCLE

	// Portfolio Thumbnails
	portW = $('.portfolio-thumb').width(); //Portfolio thumbnail width
	$('.portfolio-thumb').css({height: portW + 'px'}); // Setting the height of the thumbnail equal to the width (square)
}

