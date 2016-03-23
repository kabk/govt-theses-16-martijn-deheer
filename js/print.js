
document.addEventListener('layoutReady', function(){

	// var div = $('#article-wrapper');
	// var para = $('p');

	// $(para).each(function() {
	// 	div.html(div.html().replace(/ /g, '·'));
	// });

	function handleClick(giveSpaces) {
	  findAndReplaceDOMText();
	}

	findAndReplaceDOMText(document.getElementsByTagName('p'), {
		find: / /g,
		replace: '+'
	});


});

