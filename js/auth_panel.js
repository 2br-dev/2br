{
    $(document).ready(() => {
        $(document).on('submit', '#auth_form', submit)
        $(document).on('submit', '#auth_form_email', submitEmail)
        $(document).on('change', '.auth__input', resetErrors)
        $(document).on('click', '#pass_visible', togglePasswordVisible)
        $(document).on('click', '#auth_close, #auth_overlay', closeForm)
        $(document).on('click', '#auth_overlay, #auth_close_email', closeFormEmail)
        $(document).on('click', '#open_form', openForm)
        $(document).on('click', '#auth_forgot', forgotPassword)
        $(document).on('click', '#sign_out', signOut)
    })
    // 
    const signOut = () => {
        $.ajax({
            url: '/ajax/signOut',
            type: 'POST',
            success: response => {
                location.href = '/'
            }
        })
    }
    //
    const submit = function(event) {
        event.preventDefault()
        //
        const data = {
            values: {
                login: $.trim($('#auth_login').val()),
                password: $.trim($('#auth_password').val())
            },
            fields: {
                login: $('#auth_login'),
                password: $('#auth_password')
            }
        }
        //
        if(isValid(data)) {
            $.ajax({
                url: '/ajax/signIn',
                type: 'POST',
                dataType: 'json',
                data: {
                    login: data.values.login,
                    password: data.values.password
                },
                success: response => {
                    if(response == 1) {
                        location.href = '/lk'
                    } else {
                        data.fields.login.addClass('auth__input-wrong')
                        data.fields.password.addClass('auth__input-wrong')
                    }
                }
            })
        }
    }
    //
    const isValid = data => {
        let flag = true
        //
        if(data.values.login.length === 0) {
            flag = false
            data.fields.login.addClass('auth__input-wrong')
        }
        if(data.values.password.length === 0) {
            flag = false
            data.fields.password.addClass('auth__input-wrong')
        }
        //
        return flag
    } 
    //
    const resetErrors = () => {
        $('#auth_login').removeClass('auth__input-wrong')
        $('#auth_password').removeClass('auth__input-wrong')
        $('#auth_email').removeClass('auth__input-wrong')
    }
    //
    const togglePasswordVisible = () => {
        if($('#auth_password').attr('type') === 'password') {
            $('#auth_password').attr('type', 'text')
            $('#pass_visible').addClass('auth__btn-pass-show')
        } else {
            $('#auth_password').attr('type', 'password')
            $('#pass_visible').removeClass('auth__btn-pass-show')
        }
    }
    // 
    const closeForm = () => {
        $('#auth_form').fadeOut(200, () => {
            $('#auth_overlay').fadeOut(200)
            //
            //
            //
            $('#auth_password').attr('type', 'password')
            $('#pass_visible').removeClass('auth__btn-pass-show')
            //
            $('#auth_login').removeClass('auth__input-wrong')
            $('#auth_password').removeClass('auth__input-wrong')
            //
            $('#auth_login').val('')
            $('#auth_password').val('')
        })

    }
    // 
    const openForm = () => {
        $('#auth_overlay').fadeIn(200, () => {
            $('#auth_form').fadeIn(200)
            $('#auth_login').focus()
        })
    }
    // 
    const forgotPassword = () => {
        $('#auth_form').fadeOut(200, () => {
            $('#auth_password').attr('type', 'password')
            $('#pass_visible').removeClass('auth__btn-pass-show')
            //
            $('#auth_login').removeClass('auth__input-wrong')
            $('#auth_password').removeClass('auth__input-wrong')
            //
            $('#auth_login').val('')
            $('#auth_password').val('')
            //
            //
            //
            $('#auth_form_email').fadeIn(200)
            $('#auth_email').focus()
        })
    }
    //
    const submitEmail = function(event) {
        event.preventDefault()
        //
        const data = {
            values: {
                email: $.trim($('#auth_email').val())
            },
            fields: {
                email: $('#auth_email'),
            }
        }
        //
        if(data.values.email.indexOf('@') === -1) {
            data.fields.email.addClass('auth__input-wrong')
            return false
        }
        //
        $.ajax({
            type: 'POST',
            url: '/ajax/forgotPassword',
            dataType: 'json',
            data: {
                email: data.values.email
            },
            success: response => {
                if(response == 0 || response == -1) {
                    data.fields.email.addClass('auth__input-wrong')  
                } else if(response == 1) {
                    $('#auth_form_email').fadeOut(200, () => {
                        $('#auth_message').fadeIn(200)
                        //
                        setTimeout(function() {
                            $('#auth_message').fadeOut(200, () => {
                                $('#auth_overlay').fadeOut(200)
                                $('#auth_email').val('')
                            }) 
                        }, 2000)
                    })
                }  
            }
        })
    }
    // 
    const closeFormEmail = () => {
        $('#auth_form_email').fadeOut(200, () => {
            $('#auth_overlay').fadeOut(200)
            $('#auth_email').val('')
            $('#auth_email').removeClass('auth__input-wrong')
        })
    }
}