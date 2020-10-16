{
    $(document).ready(() => {
        // 
        let STORE = {}
        //
        getMonthEvent()
        // 
        $(document).on('click', '.calendar__conteiner_item', pickDay)
        $(document).on('click', '.calendar__head_btn', switchMonth)
    })

    /** Следующий/Предыдущий месяц */
    const switchMonth = function() {
        const MONTH = $(this).attr('data-month')
        const YEAR = $(this).attr('data-year')
        //
        getMonthEvent(`${YEAR}-${MONTH}-0`) 
    }


    /** Выделяет день в календаре и выводит информацию о нем под календарем */
    const pickDay = function(event, today = null) {
        const CLASS_PICK = 'calendar__conteiner_item-select'
        const CLASS_HIDE = 'calendar__conteiner_item-hide'
        //
        let PICK = $('.' + CLASS_PICK)         
        if(today === null) {
            PICK = $(this)
        } 
        //
        if(PICK.hasClass(CLASS_PICK) || PICK.hasClass(CLASS_HIDE)) {
            if(today === null) {
                return false
            }
        }
        
        //
        let ID = []
        let array = PICK.attr('data-store-key')
        //        
        if(array !== '' && array !== undefined) {
            array = array.split(';')
            array.forEach(id => {
                id = Number(id)
                if(id !== 0) {
                    ID.push(id)
                }
            })
        }
        //
        $(`.${CLASS_PICK}`).removeClass(CLASS_PICK)
        PICK.addClass(CLASS_PICK)
        //
        renderInfoBlock(ID)
    }


    const renderInfoBlock = (id = []) => {
        const INFO_BLOCK = $('#info_block')
        const DATE = $('#info_block_date')
        const TIME = $('#info_block_time')
        const TASKS = $('#info_block_tasks')
        const PLACE = $('#info_block_place')       
        //
        const CLASS_ACTIVE_INFO_BLOCK = 'card-visible'
        //
        if(id.length === 0) {
            INFO_BLOCK.removeClass(CLASS_ACTIVE_INFO_BLOCK)
        } else {            
            DATE.html(STORE.events[id[0]].dayNum + ' ' + getDate({yead: STORE.events[id[0]].yearNum, month: STORE.events[id[0]].monthNum}, 'MNS'))
            //
            if(id.length > 1) {
                TIME.html('')   
            } else {
                TIME.html(STORE.events[id[0]].time)
            }
            //
            let tpl = []
            if(id.length > 1) {
                id.forEach((dataId) => {
                    tpl.push('<p class="card__task">' + STORE.events[dataId].name + ' [' + STORE.events[dataId].time + ']</p>')                
                })
            } else {
                id.forEach((dataId) => {
                    tpl.push('<p class="card__task">' + STORE.events[dataId].name + '</p>')                
                })
            }
            tpl = tpl.join('')
            TASKS.html(tpl)
            //
            PLACE.html('Место: ' + STORE.events[id[0]].place)
            //
            INFO_BLOCK.addClass(CLASS_ACTIVE_INFO_BLOCK)
        }
    }

    /** Устанавливает в глобальную переменную STORE используемую выборку данных
    * @param {object} [date = {}] date 
    */
    const setStore = (data = {}) => {
        STORE = data       
    }

    
    /** Получает от сервера события текущего месяца 
    * @param {string} [date = null] date - дата YYYY-MM-01
    * Если date = null - используется текущий год и месяц
    */
    const render = (data = {}) => {
        let date = {
            today: 0,
            thisMonth: 0,
            monthName: null,
            monthNum: null, 
            monthLength: null, 
            yearNum: null, 
            firsDayOfTheWeek: null,
            state: 'present'
        }
        //
        let events = {}
        if(empty(data)) {
            date.today = getDate({}, 'D') 
            date.monthName = getDate({}, 'MN') 
            date.monthNum = getDate({}, 'M') 
            date.yearNum = getDate({}, 'Y') 
            date.monthLength = getDate({}, 'ML') 
            date.firsDayOfTheWeek = getDate({}, 'FDM') 
        } else {
            if(empty(data.date)) {
                date.today = getDate({}, 'D') 
                date.monthName = getDate({}, 'MN')
                date.monthNum = getDate({}, 'M') 
                date.yearNum = getDate({}, 'Y') 
                date.monthLength = getDate({}, 'ML') 
                date.firsDayOfTheWeek = getDate({}, 'FDM') 
            } else {
                date.monthName = data.date.monthName
                date.today = Number(data.date.today)
                date.thisMonth = Number(data.date.thisMonth)
                date.monthNum = Number(data.date.monthNum)
                date.yearNum = Number(data.date.year)
                date.monthLength = Number(data.date.monthLength) 
                date.firsDayOfTheWeek = Number(data.date.firsDayOfTheWeek)  
                //
                const M = getDate({}, 'M')
                const Y = getDate({}, 'Y')
                if(Y == date.yearNum && M == date.monthNum) {
                    date.today = getDate({}, 'D') 
                    date.thisMonth = 1
                }
                //
                if(Y > date.yearNum) {
                    data.state = 'past'
                } else if(M > date.monthNum) {
                    data.state = 'past'
                } 
                //
            }
            // 
            if(!empty(data.events)) {
                events = data.events
            }
        }       
        
        //        
        if(date.monthNum === 12) {
            date.prevMonth = date.monthNum - 1
            date.nextMonth = 1
            date.nextYear = date.yearNum + 1
            date.prevYear = date.yearNum
        } else if(date.monthNum === 1) {
            date.prevMonth = 12
            date.nextMonth = date.monthNum + 1
            date.nextYear = date.yearNum
            date.prevYear = date.yearNum - 1
        } else {
            date.prevMonth = date.monthNum - 1
            date.nextMonth = date.monthNum + 1
            date.nextYear = date.yearNum
            date.prevYear = date.yearNum
        }
        //
        setStore(data)
        // 
        const CSS_CLASS = {
            hide: ' calendar__conteiner_item-hide',
            past: ' calendar__conteiner_item-past',
            event: ' calendar__conteiner_item-event',
            today: ' calendar__conteiner_item-today',
            select: ' calendar__conteiner_item-select'
        }
        // 
        const CONTEINER = $('#conteiner')
        const MONTH_TITLE = $('#month_title')
        const PREV_MONTH = $('#prev_month')
        const NEXT_MONTH = $('#next_month')
        //
        CONTEINER.empty()
        //
        let eventsDays = {}
        for (const index in events) {
            const event = events[index]
            const day = Number(event.dayNum)
            //
            if(eventsDays[day] === undefined) {
                eventsDays[day] = []
            }
            eventsDays[day].push(index)
        }       
        // 
        let tpl = []
        // 
        // 
        // 
        let rowPosition = 0
        let flag = true
        let stop = date.monthLength
        let keyWeek = 1
        let key = 1
        //
        while(flag) {
            if(key === stop && rowPosition !== 6) {
                stop++
            }
            //
            if(key === stop) {
                flag = false
            }
            //
            if(rowPosition === 7) {
                rowPosition = 0
            }
            rowPosition++
            //
            let calsses = ''
            let eventId = []
            let eventTitle = ''
            let dayNum = ''
            //
            if(keyWeek < 7 && keyWeek < date.firsDayOfTheWeek) {
                calsses += CSS_CLASS.hide
                keyWeek++
            } else if(key > date.monthLength) {
                calsses += CSS_CLASS.hide
                key++
            } else {
                //
                dayNum = key
                //
                if(key < date.today || data.state == 'past') {
                    calsses += CSS_CLASS.past
                }
                if(key == date.today && date.thisMonth == 1) {
                    calsses += CSS_CLASS.today
                    calsses += CSS_CLASS.select
                }
                //
                for (let index in eventsDays) {
                    const event = eventsDays[index]
                    //
                    if(Number(index) === key) {
                        eventId = event
                        calsses += CSS_CLASS.event
                    }
                } 
                //
                key++
            }
            //          
            if(eventId.length !== 0) {
                if(eventTitle === '') {
                    eventTitle = events[eventId[0]].name                    
                }
            }
            eventId = eventId.join(';')     
            // 
            tpl.push('<div class="calendar__conteiner_item' + calsses + '" data-store-key="' + eventId + '">')
            tpl.push('<p class="calendar__conteiner_item_num">' + dayNum + '</p>') 
            tpl.push('<p class="calendar__conteiner_item_text">' + eventTitle + '</p>') 
            tpl.push('</div>') 
        } 
        // 
        tpl = tpl.join('')
        CONTEINER.append(tpl)
        MONTH_TITLE.text(`${date.monthName} [${date.yearNum}]`)   
        //
        PREV_MONTH.attr('data-month', date.prevMonth)
        PREV_MONTH.attr('data-year', date.prevYear)
        NEXT_MONTH.attr('data-month', date.nextMonth)
        NEXT_MONTH.attr('data-year', date.nextYear)
        //
        pickDay('' ,date.today)
    }


    /** Получает от сервера события текущего месяца и передает в parseData(data)
    * @param {string} [date = null] date - дата YYYY-MM-01
    * Если date = null - используется текущий год и месяц
    */
    const getMonthEvent = (date = null) => {
        if(date === null) {
            date = getDate() 
        }
        // 
        $.ajax({
            url: '/ajax/getMonthEvent',
            type: 'POST',
            dataType: 'JSON',
            data: {
                date
            },
            success: (data) => {
                if (typeof data === 'object') {
                    render(data)
                }
            }
        })
    }
    

    /** Возвращает дату в формате YYYY-MM-DD
    * @param {object} [obj = {}] obj
    *   @param {number} obj.month
    *   @param {number} [obj.year = undefined] obj.year
    * @param {string} [get = null] get - получить кусок даты
    * @returns {string}
    */
    const getDate = (obj = {}, get = null) => {
        const DATE = new Date()
        //
        const calendar = {
            1: 'Январь',
            2: 'Февраль',
            3: 'Март',
            4: 'Апрель',
            5: 'Май',
            6: 'Июнь',
            7: 'Июль',
            8: 'Август',
            9: 'Сентябрь',
            10: 'Октябрь',
            11: 'Ноябрь',
            12: 'Декабрь'
        }
        // 
        const calendar_s = {
            1: 'Января',
            2: 'Февраля',
            3: 'Марта',
            4: 'Апреля',
            5: 'Майя',
            6: 'Июня',
            7: 'Июля',
            8: 'Августа',
            9: 'Сентября',
            10: 'Октября',
            11: 'Ноября',
            12: 'Декабря'
        }
        // 
        let result = ''
        let year = null
        let month = null
        //
        if(empty(obj) || obj.month === undefined || isNaN(Number(obj.month)) || Number(obj.month) < 1 || Number(obj.month) > 12) {
            result = DATE.getFullYear() + '-' + (DATE.getMonth() + 1) + '-' + DATE.getDate()
            day = Number(DATE.getDate())
            year = Number(DATE.getFullYear())
            month = Number(DATE.getMonth() + 1)
        } else {
            if(obj.year !== undefined && !isNaN(Number(obj.year)) && Number(obj.year) >= 2019) {
                result = obj.year
            } else {
                result = DATE.getFullYear()
            }
            // 
            year = result
            month = obj.month
            result = year + '-' + month + '-01'
        }
        //
        if(get === 'D') {
            return Number(day)
        } else if(get === 'M') {
            return Number(month)
        } else if(get === 'Y') {
            return Number(year)
        } else if(get === 'ML') {
            return Number(new Date(year, month, 0).getDate())
        } else if(get === 'FDM') {
            return Number(new Date(year, month, 1).getDay())
        } else if(get === 'MN') {
            return calendar[month]
        } else if(get === 'MNS') {
            return calendar_s[month]
        } else {
            return result
        }
    }


    /** Проверяет объект на пустоту
    * @param {object} [obj = {}] obj
    * @returns {boolean}
    */
    const empty = (obj = {}) => {
        for(var key in obj) {
            return false
        }
        return true
    }
}

