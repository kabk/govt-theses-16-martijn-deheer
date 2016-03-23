
document.addEventListener('layoutReady', function(){

	// var div = $('#article-wrapper');
	// var para = $('p');

	// $(para).each(function() {
	// 	div.html(div.html().replace(/ /g, '·'));
	// });

	findAndReplaceDOMText();
});

findAndReplaceDOMText(document.body, {
	preset: 'prose',
	find: ' ',
	replace: function(portion, match) {
		called = true;
		var el = document.createElement('em');
		el.style.backgroundColor = "red";
		el.innerHTML = portion.text;
		return el;
	}
});
