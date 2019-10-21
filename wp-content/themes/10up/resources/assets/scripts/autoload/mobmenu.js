// mob menu
(function (jQuery) {
    jQuery.fn.mobMenu = function () {
        this.each(function () {
            var m = $(this),
                t = $('<li class="mm-toggle"/>');
                t.html('<span>&#9660;</span>');
            t.click(function () {
                m.toggleClass('mm-hide');
            });
            m.addClass('mm-hide').prepend(t);
        });
    };
})(jQuery);
jQuery(function () {
    jQuery('#nav').mobMenu();
});
