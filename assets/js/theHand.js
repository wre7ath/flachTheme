(function ($) {

    window.addEventListener("scroll", posterScroll);

    function posterScroll() {
        var scrolledHeight = document.documentElement.scrollTop;
        if (scrolledHeight < window.innerHeight) {
            var scrolled = (scrolledHeight * 100) / (window.innerHeight * 0.6);
            posterAnimation(scrolled);
        }
        else {
            $(".svg-poster .bloodtrail").css("transform", "translate(-181.75px,-107px)");
            $(".movie-poster-animation").css("background-color", "rgb( 238,34,36)");
            $(".svg-poster .cls-2").css("fill", "rgb(238,34,36)");
            $(".svg-poster svg").css("height", "50vh");
            $(".svg-poster svg").css("filter", "blur( 2 px)");
        }
    }

    function posterAnimation(scrolled) {
        var minusScrolled = Math.abs(scrolled - 100);
        var bloodScroll = (minusScrolled * 1.39) + 106;

        if (scrolled < 100) {

            $(".svg-poster .bloodtrail").css("transform", "translate(-181.75px,-" + bloodScroll + "px)");

            $(".movie-poster-animation").css("background-color", "rgb(" + scrolled * 2.38 + "," + scrolled * 0.34 + "," + scrolled * 0.36 + ")");
            $(".svg-poster .cls-2").css("fill", "rgb(" + scrolled * 2.38 + "," + scrolled * 0.34 + "," + scrolled * 0.36 + ")");

            var posterSize = (minusScrolled * 0.35) + 50;
            $(".svg-poster svg").css("height", posterSize + "vh");

            $(".svg-poster svg").css("filter", "blur(" + scrolled / 200 + "px)");

        }

    }



    const player = new Plyr('#handMovie', {
        enabled: true,
        debug: false,
        quality: { default: 1080, options: [1080, 720] },
        settings: ['quality'],
        disableContextMenu: false,
        invertTime: false,
        storage:{ enabled: false, key: 'none' },


    });


})(jQuery);
