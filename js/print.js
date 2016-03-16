
document.addEventListener('layoutReady', function(){

	var div = $('#article-wrapper');
	div.html(div.html().replace(/ /g, '·'));

});