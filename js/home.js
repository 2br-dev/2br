// на обложке проекта надпись двигается за мышью
{
    $(document).ready(() => {
        $(document).on('mousemove', '.projects__mask', move)
    })
    // 
    const move = function(event) {
        const BOX = $(this)
        const CONVAS = BOX.find('.projects__mask_convas')
        const TITLE = $(BOX.find('.projects__mask_text'))
        // 
        const MOUSE_POSITION = {
            X: event.pageX - BOX.offset().left,
            Y: event.pageY - BOX.offset().top - 20
        }
        // 
        const TITLE_PROPS = {
            height: TITLE.height() + 1,
            width:  TITLE.width() + 1,
            widthMid: (TITLE.width() + 1) / 2,
            heightMid: (TITLE.height() + 1) / 2
        }
        // 
        const CONVAS_SIZE = {
            height: CONVAS.height(),
            width:  CONVAS.width()
        }
        // 
        let NEW_POSITION = {
            left: TITLE.left,
            top: TITLE.top
        }
        // 
        if(CONVAS_SIZE.width - MOUSE_POSITION.X > TITLE_PROPS.widthMid && MOUSE_POSITION.X > TITLE_PROPS.widthMid) {
            NEW_POSITION.left = MOUSE_POSITION.X -  TITLE_PROPS.widthMid                              
        } else if(CONVAS_SIZE.width - MOUSE_POSITION.X > TITLE_PROPS.widthMid && MOUSE_POSITION.X <= TITLE_PROPS.widthMid) {
            NEW_POSITION.left = 0    
        } else {
            let step_1 = CONVAS_SIZE.width - MOUSE_POSITION.X
            let step_2 = TITLE_PROPS.width - step_1
            NEW_POSITION.left = MOUSE_POSITION.X - step_2
        }
        //
        if(CONVAS_SIZE.height - MOUSE_POSITION.Y > TITLE_PROPS.heightMid && MOUSE_POSITION.Y > TITLE_PROPS.heightMid) {  
            NEW_POSITION.top = MOUSE_POSITION.Y - TITLE_PROPS.heightMid               
        } else if(CONVAS_SIZE.height - MOUSE_POSITION.Y > TITLE_PROPS.heightMid && MOUSE_POSITION.Y <= TITLE_PROPS.heightMid) {
            NEW_POSITION.top = 0
        } else {
            let step_1 = CONVAS_SIZE.height - MOUSE_POSITION.Y
            let step_2 = TITLE_PROPS.height - step_1
            NEW_POSITION.top = MOUSE_POSITION.Y - step_2
        }
        // 
        TITLE.css({
            left: NEW_POSITION.left,
            top: NEW_POSITION.top
        })        
    }
}