	// fit header
	$("#fittext").fitText(0.75, {minFontSize:'24px', maxFontSize:'180px'});

	$('.content > p').children().each(function () {
	    $(this).html(function (i, html) {
	        return $(this).html().replace('&#160;', '·');
	    });
	});