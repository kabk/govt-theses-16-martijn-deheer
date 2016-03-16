
document.addEventListener('layoutReady', function(){

	var div = $('#content');
	var para = $('p');

	$(para).each(function() {
		div.html(div.html().replace(/ /g, '·'));
	});

});