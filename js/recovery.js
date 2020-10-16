{
    $(document).ready(() => {
        $('#pass').focus()
        $(document).on('submit', '#form_recovery', save)
    })
    //
    const save = (e) => {
        e.preventDefault()
        
        //
        const pass = $.trim($('#pass').val())
        const dublePass = $.trim($('#duble_pass').val())
        const hash = $.trim($('#submit').attr('hash'))
        //
        let flag = true
        if(pass.length === 0) {
            $('#pass').addClass('form__input-wrong')
            flag = false            
        } else {
            $('#pass').removeClass('form__input-wrong')
        }
        //
        if(dublePass.length === 0) {
            $('#duble_pass').addClass('form__input-wrong')
            flag = false
        } else {
            $('#duble_pass').removeClass('form__input-wrong')
        }
        //
        if(dublePass.length !== 0 && pass.length !== 0 && dublePass !== pass) {
            $('#pass').addClass('form__input-wrong')
            $('#duble_pass').addClass('form__input-wrong')
            flag = false
        }
        if(hash.length === 0) {
            flag = false
        }
        //
        if(flag) {
            $.ajax({
                url: '/ajax/recoveryPassword',
                type: 'POST',
                dataType: 'json',
                data: {
                    pass: pass,
                    duble_pass: dublePass,
                    hash: hash
                },
                success: (data) => {
                    if(data == 0) {
                        $('#pass').addClass('form__input-wrong')
                        $('#duble_pass').addClass('form__input-wrong')
                    } else {
                        location.href = '/'
                    }
                } 
            })
            
        }
    }
}