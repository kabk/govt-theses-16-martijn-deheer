
document.addEventListener('layoutReady', function(){




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