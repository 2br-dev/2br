// вызов меню
//
{
    $(document).ready(() => {
        $(document).on('click', '#burger_menu_btn', toggleMenu)
    })
    //
    const toggleMenu = function() {
        const CLASS_BTN = 'header__btn_cross'
        const CLASS_BTN_BACK = 'header__btn_back'
        const CLASS_BTN_FINALY = 'header__btn_finaly'
        const BURGER = $(this)
        const BURGER_READY = Number(BURGER.attr('ready'))
        const MENU = $('#menu')
        // если меню готово к аницации
        if(BURGER_READY === 1) {
            BURGER.attr('ready', 0)
            if(BURGER.hasClass(CLASS_BTN)) {
                // закрыть
                MENU.fadeOut(400)
                BURGER.addClass(CLASS_BTN_BACK)
                setTimeout(() => {
                    BURGER.addClass(CLASS_BTN_FINALY)
                    setTimeout(() => { 
                    BURGER.removeClass(CLASS_BTN)
                    BURGER.removeClass(CLASS_BTN_BACK)
                    BURGER.removeClass(CLASS_BTN_FINALY)
                    BURGER.attr('ready', 1)
                        }, 400)
                }, 400)
            } else {
                // открыть
                MENU.fadeIn(400, () => {
                    BURGER.attr('ready', 1)
                })
                BURGER.addClass(CLASS_BTN)
            }
        }
    }
}
///////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////

;$(document).ready(() => {
    new google.maps.Map(document.getElementById('map'), {
        center: {lat: -34.397, lng: 150.644},
        zoom: 8
    })
})
    ;