// footnotes
var main = function (){};
$('a').hover(function() {
	$('.article-footnote').fadeIn();
	}, function(){
	$('.article-footnote').fadeOut();
});

// ProgressBar
window.onload = function() {
	scrollProgress.set({
			styles: false,
			events: false,
			bottom: true
		});
	window.onresize = scrollProgress.update;
	window.onscroll = scrollProgress.trigger;
};