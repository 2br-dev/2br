{   
    $(document).ready(() => {
        $(window).on('mousewheel', scroll)
        $(document).on('click', '#contacts', showContacts)
        //
        // $(window).swipe({
        //     swipeUp: upSwipe,
        //     swipeDown: downSwipe,
        //     threshold: 0
        // })
    })
    //
    const showContacts = () => {
        $('html, body').animate({scrollTop: 0},0)
        const DDM = $('#contacts')
        const HEADER = $('.header')
        const CLASS_ACTIVE = 'contacts-active'
        const CLASS_HIDE = 'contacts-hide' 
        //
        const CLASS_BTN = 'header__btn_cross'
        const BURGER = $('#burger_menu_btn')
        const MENU = $('#menu')
        // 
        BURGER.removeClass(CLASS_BTN)
        MENU.fadeOut(100)
        //
        HEADER.css({position: 'absolute'})
        DDM.addClass(CLASS_ACTIVE)
        $('body').css({overflow: 'hidden'})
    }
    //
    const scroll = function(event) {
        if($(window).width() < 1000) {
            return false
        }
        // если не у верхнего края
        if($(window).scrollTop() > 0 || $('#burger_menu_btn').hasClass('header__btn_cross')) {
            return false
        }       
        // 
        const DDM = $('#contacts')
        const HEADER = $('.header')
        const CLASS_ACTIVE = 'contacts-active'
        const CLASS_HIDE = 'contacts-hide'       
        // направление прокрутки
        if(event.originalEvent.wheelDelta < 0) {
            // down
            DDM.removeClass(CLASS_ACTIVE)
            $('body').css({overflow: 'auto'})
            setTimeout(() => {
                HEADER.css({position: 'fixed'})
            }, 1000)
        } else {
            // up
            if(!DDM.hasClass(CLASS_ACTIVE)) {
                HEADER.css({position: 'absolute'})
                DDM.addClass(CLASS_ACTIVE)
                $('body').css({overflow: 'hidden'})
            }
        }
    }
}
///////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////
