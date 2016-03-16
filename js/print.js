

document.addEventListener('layoutReady', function(){



	// fit header
	$("#fittext").fitText(0.75, {minFontSize:'24px'});

	$('.content > p:eq(0)').children().each(function() {
		var textNode = $(this);
		textNode.text(textNode.text().replace("\xa0", "·"));
	});


});