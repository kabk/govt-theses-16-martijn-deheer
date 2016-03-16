

document.addEventListener('layoutReady', function(){

	// fit header
	// $("#fittext").fitText(0.75, {minFontSize:'24px', maxFontSize:'180px'});

	var div = $('#content');
	div.html(div.html().replace(/ /g, '·'));

});