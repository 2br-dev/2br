$(document).ready(() => {
    $('#slider').slick({
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2000,
        speed: 400,
        slidesToShow: 3,
        slidesToScroll: 1,
        centerMode: true,
        centerPadding: '0',
        responsive: [
            {
                breakpoint: 1000,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    })
})