{
    $(document).ready(() => {
        $(document).on('click', '#edit_pd', showPdEditor)
        $(document).on('click', '#pd_back', hidePdEditor)
        $(document).on('submit', '#pd_editor', saveData)
        // 
        $(document).on('click', '#edit_password', showPassEditor)
        $(document).on('click', '#pass_close, #pass_overlay', hidePassEditor)
        $(document).on('submit', '#pass_form', savePass)
    })
    //
    const showPdEditor = (e) => {
        e.preventDefault()
        const EDITOR = $('#pd_editor')
        const LIST = $('#pd_list')
        const CLASS_ACTIVE = 'pd-box__section-active'
        //
        $(LIST).removeClass(CLASS_ACTIVE)
        $(EDITOR).addClass(CLASS_ACTIVE)
    }
    //
    const hidePdEditor = (e) => {
        e.preventDefault()
        const EDITOR = $('#pd_editor')
        const LIST = $('#pd_list')
        const CLASS_ACTIVE = 'pd-box__section-active'
        //
        $(EDITOR).removeClass(CLASS_ACTIVE)
        $(LIST).addClass(CLASS_ACTIVE)
    }
    //
    const saveData = (e) => {
        e.preventDefault()
        //
        const NAME = {
            value: $.trim( $('#pd_name').val() ),
            node: $('#pd_name')
        }
        const EMAIL = {
            value: $.trim( $('#pd_email').val() ),
            node: $('#pd_email')
        }
        const PHONE = {
            value: $.trim( $('#pd_phone').val() ),
            node: $('#pd_phone')
        }
        //
        let isValid = true
        //
        if(NAME.value.length == 0) {
            NAME.node.addClass('pd-box__input-wrong')
            isValid = false
        } else {
            NAME.node.removeClass('pd-box__input-wrong')
        }
        if(PHONE.value.length < 10) {
            PHONE.node.addClass('pd-box__input-wrong')
            isValid = false
        } else {
            PHONE.node.removeClass('pd-box__input-wrong')
        }
        if(EMAIL.value.indexOf('@') == -1) {
            EMAIL.node.addClass('pd-box__input-wrong')
            isValid = false
        } else {
            EMAIL.node.removeClass('pd-box__input-wrong')
        }
        //
        if(isValid) {
            $.ajax({
                url: '/ajax/updatePersonalData',
                type: 'POST',
                dataType: 'json',
                data: {
                    name: NAME.value,
                    email: EMAIL.value,
                    phone: PHONE.value
                },
                success: response => { 
                    if(response == 1) {
                        location.reload()   
                    } else {
                        alert('Ошибка')
                    }
                }
            })            
        }
    }
    // 
    // 
    // 
    //
    const showPassEditor = (e) => {
        e.preventDefault()
        const EDITOR = $('#pass_form')
        const OVERLAY = $('#pass_overlay')
        //
        OVERLAY.fadeIn(100, () => {
            EDITOR.fadeIn(100)
        })
    }
    //
    const hidePassEditor = (e) => {
        e.preventDefault()
        const EDITOR = $('#pass_form')
        const OVERLAY = $('#pass_overlay')
        //
        EDITOR.fadeOut(100, () => {
            OVERLAY.fadeOut(100)
        })
    }
    //
    const savePass = (e) => {        
        e.preventDefault()
        //
        const PASS = {
            value: $.trim( $('#pass_old').val() ),
            node: $('#pass_old')
        }
        const NEW_PASS = {
            value: $.trim( $('#pass_new').val() ),
            node: $('#pass_new')
        }
        const NEW_PASS_DUBLE = {
            value: $.trim( $('#pass_new_duble').val() ),
            node: $('#pass_new_duble')
        }
        //
        let isValid = true
        //
        if(PASS.value.length == 0) {
            PASS.node.addClass('pass__input-wrong')
            isValid = false
        } else {
            PASS.node.removeClass('pass__input-wrong')
        }
        // 
        if(NEW_PASS.value.length == 0) {
            NEW_PASS.node.addClass('pass__input-wrong')
            isValid = false
        } else {
            NEW_PASS.node.removeClass('pass__input-wrong')
        }
        // 
        if(NEW_PASS_DUBLE.value.length == 0) {
            NEW_PASS_DUBLE.node.addClass('pass__input-wrong')
            isValid = false
        } else {
            NEW_PASS_DUBLE.node.removeClass('pass__input-wrong')
        }
        // 
        if(NEW_PASS.value.length != 0 && NEW_PASS_DUBLE.value.length != 0) {           
            if(NEW_PASS_DUBLE.value !== NEW_PASS.value) {
                NEW_PASS.node.addClass('pass__input-wrong')
                NEW_PASS_DUBLE.node.addClass('pass__input-wrong')
                isValid = false
            } else {
                NEW_PASS.node.removeClass('pass__input-wrong')
                NEW_PASS_DUBLE.node.removeClass('pass__input-wrong')
            }
        }
        //
        if(isValid) {
            $.ajax({
                url: '/ajax/updatePassword',
                type: 'POST',
                dataType: 'json',
                data: {
                    password_old: PASS.value,
                    password_new: NEW_PASS.value,
                    password_new_duble: NEW_PASS_DUBLE.value
                },
                success: response => { 
                    if(response == 1) {
                        location.reload()   
                    } else if(response == 0) {
                        PASS.node.addClass('pass__input-wrong')
                    } else {
                        alert('Ошибка')
                    }
                }
            })            
        }
    }
}
