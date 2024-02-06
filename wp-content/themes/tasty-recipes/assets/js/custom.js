jQuery(document).ready(function ($) {

    // slick slider
    $('.chocolate_container').slick({
        infinite: true,
        center: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [{
            breakpoint: 991,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 576,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }

        ]
    });

}); // end of $(document).ready(function()