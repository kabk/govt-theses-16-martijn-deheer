

document.addEventListener('layoutReady', function(){

	// // fit header
	// $("#fittext").fitText(0.75, {minFontSize:'24px'});

	// $('.thesis-content > .content > p').children().each(function() {
	// 	var textNode = $(this);
	// 	textNode.text(textNode.text().replace("\xa0", "·"));
	// });

	$('.content > p').children().each(function () {
	    $(this).html(function (i, html) {
	        return $(this).html().replace('&#160;', '·');
	    });
	});


});