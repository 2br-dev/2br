$(document).ready(() => {
    $(document).on('click', '#brif', showBrif)
    $(document).on('submit', '#brifForm', brifSubmit)
    $(document).on('submit', '#promoForm', promoSubmit)
    $(document).on('click', '#closeBrif, #brifOverlay', closeBrif)
    $(document).on('click', '#closePromo, #brifOverlay', closePromo)
    $(document).on('change', '#connect_1, #connect_2, #connect_3', toogleHideInputPhone)
    $(document).on('change', '#connect_4', toogleHideInputEmail)
})


const nodes = {
    overlay: $('#brifOverlay'),
    brif: {
        form: $('#brifForm'),
        close: $('#closeBrif'),
        scope: $('#scope'),
        works: {
            type_1: $('#type_1'),
            type_2: $('#type_2'),
            type_3: $('#type_3'),
            another: $('#another')
        },
        connect: {
            connect_1: $('#connect_1'),
            connect_2: $('#connect_2'),
            connect_3: $('#connect_3'),
            connect_4: $('#connect_4'),
            hideInputPhone: $('#connect_1_input'),
            hideInputEmail: $('#connect_2_input'),
        },
        link: $('#b_link'),
        sections: {
            s_1: $('#section_1'),
            s_2: $('#section_2'),
            s_3: $('#section_3')
        }
    },
    promo: {
        form: $('#promoForm'),
        close: $('#closePromo'),
        email: $('#p_email'),
        section: $('#section_5')
    }
}


const classes = {
    brif: {
        error: 'b__box-error',
        inputVisible: 'b__input-hide-visible'
    },
    promo: {
        error: 'p__box-error'
    }
}


function showBrif(e) {
    e.preventDefault()
    nodes.overlay.fadeIn(200, () => {
        nodes.brif.form.fadeIn(200)
    })
}

function closeBrif(e) {
    e.preventDefault()
    nodes.brif.form.fadeOut(200, () => {
        nodes.overlay.fadeOut(200)
    })
}

function resetErrors() {
    nodes.brif.sections.s_1.removeClass(classes.brif.error)
    nodes.brif.sections.s_2.removeClass(classes.brif.error)
    nodes.brif.sections.s_3.removeClass(classes.brif.error)
}

function brifSubmit(e) {
    e.preventDefault()
    resetErrors()
    
    const scope = $.trim(nodes.brif.scope.val())


    let works = []
    if(nodes.brif.works.type_1.prop('checked')) {
        works.push('брендинг/ ребрендинг')
    }
    if(nodes.brif.works.type_2.prop('checked')) {
        works.push('создание сайта/ продукта Digitale')
    }
    if(nodes.brif.works.type_3.prop('checked')) {
        works.push('коммуникационная стратегия')
    }
    if($.trim(nodes.brif.works.another.val()) != '') {
        works.push($.trim(nodes.brif.works.another.val()))
    }

    let connect = []
    if(nodes.brif.connect.connect_1.prop('checked')) {
        if(nodes.brif.connect.hideInputPhone.val() != '') {
            connect.push(`Телефон: ${nodes.brif.connect.hideInputPhone.val()}`)
        }
    } 

    if(nodes.brif.connect.connect_2.prop('checked')) {
        if(nodes.brif.connect.hideInputPhone.val() != '') {
            connect.push(`Telegram: ${nodes.brif.connect.hideInputPhone.val()}`)
        }
    }    

    if(nodes.brif.connect.connect_3.prop('checked')) {
        if(nodes.brif.connect.hideInputPhone.val() != '') {
            connect.push(`WhatsApp: ${nodes.brif.connect.hideInputPhone.val()}`)
        }
    }  

    if(nodes.brif.connect.connect_4.prop('checked')) {
        if(nodes.brif.connect.hideInputEmail.val() != '') {
            connect.push(`e-mail: ${nodes.brif.connect.hideInputEmail.val()}`)
        }
    }   

    link = $.trim(nodes.brif.link.val())
    
    let isValid = true
    if(scope === '') {
        nodes.brif.sections.s_1.addClass(classes.brif.error)
        isValid = false
    }
    if(works.length === 0) {
        nodes.brif.sections.s_2.addClass(classes.brif.error)
        isValid = false
    }
    if(connect.length === 0) {
        nodes.brif.sections.s_3.addClass(classes.brif.error)
        isValid = false
    }

    if(isValid) {
        const Data = new FormData()
        Data.append('scope', scope)
        Data.append('works', JSON.stringify(works))
        Data.append('connect', JSON.stringify(connect))
        Data.append('link', link)
        
        $.ajax({
            url: '/ajax/brif',
            type: 'POST',
            processData: false,
            contentType: false,
            data: Data,
            success: (data) => {
                if(data == 1) {
                    showPromo()
                } else {
                    alert('Ошибка');
                }
            }
        })
    }
}


function toogleHideInputPhone(e) {
    e.preventDefault()
    if(nodes.brif.connect.connect_1.prop('checked') || nodes.brif.connect.connect_2.prop('checked') || nodes.brif.connect.connect_3.prop('checked')) {
        nodes.brif.connect.hideInputPhone.addClass(classes.brif.inputVisible)    
    } else {
        nodes.brif.connect.hideInputPhone.removeClass(classes.brif.inputVisible)
    }
}


function toogleHideInputEmail(e) {
    e.preventDefault()
    if(nodes.brif.connect.connect_4.prop('checked')) {
        nodes.brif.connect.hideInputEmail.addClass(classes.brif.inputVisible)    
    } else {
        nodes.brif.connect.hideInputEmail.removeClass(classes.brif.inputVisible)
    }
}

function showPromo() {
    nodes.brif.form.fadeOut(200, () => {
        nodes.promo.form.fadeIn(200)
    })
}

function closePromo(e) {
    e.preventDefault()
    nodes.promo.form.fadeOut(200, () => {
        nodes.overlay.fadeOut(200)
    })
}

function promoSubmit(e) {
    e.preventDefault()
    nodes.promo.section.removeClass(classes.promo.error)
    
    const email = nodes.promo.email.val()
    let isValid = true
    
    if(email == '') {
        isValid = false
        nodes.promo.section.addClass(classes.promo.error)
    }

    if(isValid) {
        $.ajax({
            url: '/ajax/sendPromo',
            type: 'POST',
            data: {
                email: email
            },
            success: (data) => {
                location.reload()
            }
        })
    }
}   