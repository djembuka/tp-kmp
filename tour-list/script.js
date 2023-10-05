(function($) {
    "use strict";
    $(function() {
        $(".b-tour-list").each(function() {
            var $tourList = $(this);
            var $container = $tourList.find(".swiper-container");
            var $items = $tourList.find(".swiper-slide");
            setTimeout(function() {
                $tourList.addClass("i-animate");
            }, 500);
            var menuItemWidth = 120;
            var menuItems = menuItemWidth * $items.length;
            /*$items.each(function() {
                menuItems += $(this).width();
            });*/
            if ($container.width() < ($items.length - 1) * 20 + menuItems) {
                var swiper = new Swiper($container, {
                    slidesPerView: Math.round($container.width() * 10 / (menuItemWidth + 20)) / 10,
                    spaceBetween: 20,
                    freeMode: true
                });
            } else {
              $items.css({ width: Math.floor(100 / $items.length) + '%' });
            }
        });
    });
})(jQuery);