(function ($) {
    "use strict";
    
    var $window = $(window),
        $document = $(document);
    
    $.fn.scrollProgressIndicator = function (options) {

        var $element = this,
            settings = $.extend({
                "backgroundColor": "#fff"
            }, options);
        
        $element.css("backgroundColor", settings.backgroundColor);

        $window.on("scroll resize", function () {
            var docHeight = $document.height(),
                winHeight = $window.height(),
                color = settings.backgroundColor,
                percentage = ($window.scrollTop() / (docHeight - winHeight)) * 100;

            if (typeof settings.colors === "object") {
                $.each(settings.colors, function (key, value) {
                    if (percentage >= key) {
                        color = value;
                    } else {
                        return true;
                    }
                });

                $element.css({
                    width: percentage + "%",
                    backgroundColor: color
                });
            } else {
                $element.width(percentage + "%");
            }
        });
        
        $window.scroll();
        
        return this;
    };
    
}(jQuery));