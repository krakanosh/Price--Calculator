$(".phone-mask").mask("+7 (999) 999-9999");

(function checkExistence() {
    const form = document.getElementById('calc__form')
    if (form === null) {
        return
    }
    let pricesObject = {
        room_price: 1000,
        type_clining_price: 1500,
        service_1: 0,
        service_2: 0,
        service_3: 0,
        service_4: 0,
        service_5: 0,
        service_6: 0,
        service_7: 0,
        service_8: 0,
        service_9: 0,
        service_10: 0,
        service_11: 0,
        service_12: 0,
        service_13: 0,
        service_14: 0,
    };

    (function getRoomPrice() {
        const roomCountsBtns = document.querySelectorAll('.room__item input')
        const roomsElement = document.getElementById('rooms')
        const roomsText = document.getElementById('rooms-text')
        
        roomCountsBtns.forEach(roomCountBtn => {
            roomCountBtn.addEventListener('click', function() {
                pricesObject.room_price = parseInt(this.getAttribute('data-price'))

                roomsElement.textContent = roomCountBtn.value
                if (roomCountBtn.value > 1) {
                    roomsText.textContent = 'жилыми комнатами'
                }
            })
        })
    }());

    (function getTypeCliningPrice() {
        const typeCliningBtns = document.querySelectorAll('.type__cleaning input')

        typeCliningBtns.forEach(typeCliningBtn => {
            typeCliningBtn.addEventListener('click', function() {
                let currentTypePrice = parseInt(this.getAttribute('data-price'))
                pricesObject.type_clining_price = currentTypePrice
            })
        })
    }());

    (function resetForm() {
        const resetFormBtn = document.getElementById('reset-form')
        resetFormBtn.addEventListener('click', function() {
            const checkboxes = document.querySelectorAll('.checkbox')
            checkboxes.forEach(checkbox => {
                const checkboxText = checkbox.parentElement.querySelector('.text-btn')        
                checkboxText.textContent = 'Добавить'
            })
            for (const key in pricesObject) {
                pricesObject[key] = 0
            }
            pricesObject.room_price = 1000
            pricesObject.type_clining_price = 1500
        })
    }());

    (function increment_decrementButtons(pricesObject) {
        const inputButtonsArray = document.querySelectorAll('.input__btns button')
        
        inputButtonsArray.forEach(inputButton => {            
            inputButton.addEventListener('click', function(e) {
                let input = inputButton.parentElement.querySelector('.service-count')
                let inputValue = parseInt(input.value)
                const inputName = input.getAttribute('name')
                
                if (e.target.classList.contains('decrement') && inputValue > 0) {
                    input.value = --inputValue
                    for (const key in pricesObject) {
                        if (inputName === key) {
                            pricesObject[key] -= parseInt(input.dataset.price)
                        }
                    }
                } else if (e.target.classList.contains('increment') && inputValue < 99) {
                    input.value = ++inputValue
                    for (const key in pricesObject) {
                        if (inputName === key) {
                            pricesObject[key] += parseInt(input.dataset.price)
                        }
                    }
                }
            })
        })
    }(pricesObject));

    (function changedInputsValues() {
        const inputs = document.querySelectorAll('.service-count')
        inputs.forEach(input => {
            input.addEventListener('input', function(e) {
                const nameInput = e.target.getAttribute('name')
                const inputValue = e.target.value
                
                for (const key in pricesObject) {
                    if (nameInput === key) {
                        const sumServices = this.dataset.price * inputValue                        
                        pricesObject[key] = sumServices
                    }
                }
            })
        })
    }());

    (function getDataFromCheckboxes() {
        const checkboxes = document.querySelectorAll('.single__service input')
        checkboxes.forEach(checkbox => {
            checkbox.addEventListener('click', function() {

            const inputValue = this.dataset.price
            const nameInput = this.getAttribute('name')

            if (this.checked) {        
                this.parentElement.querySelector('.text-btn').textContent = 'Удалить'                
                    for (const key in pricesObject) {
                        if (nameInput === key) {
                            pricesObject[key] = parseInt(inputValue)
                        }
                    }
            } else {
                this.parentElement.querySelector('.text-btn').textContent = 'Добавить'
                    for (const key in pricesObject) {
                        if (nameInput === key) {
                            pricesObject[key] = 0
                        }
                    }
                }
            })
        })
    }());

    (function help() {
        const helpTriggersArray = document.querySelectorAll('.help-trigger')
        helpTriggersArray.forEach(helpTrigger => {
            document.addEventListener('click', function(e) {
                const helpTriggerParent = helpTrigger.parentElement.querySelector('.help-info')
                if (e.target.className === helpTrigger.className) {
                    helpTriggerParent.classList.remove('help-info--active')
                    e.target.parentElement.querySelector('.help-info').classList.add('help-info--active')
                } else {
                    helpTriggerParent.classList.remove('help-info--active')
                }
            })
        })
    }());

    function calculatedForm() {
        const resultPriceElement = document.getElementById('clining-cost')
        const resultPriceForm = document.getElementById('clining-cost-form')
        const percent = pricesObject.service_10
        let PricesArray = Object.values(pricesObject)
        
        let resultAllPricesSum = PricesArray.reduce((accumulator, currentValue) => {
            return accumulator + currentValue
        })        
        if (pricesObject.service_10 > 0) {
            let resultPriceOnPercent = (resultAllPricesSum - percent) + ((resultAllPricesSum - percent) / 100 * percent)
            resultPriceElement.textContent = resultPriceOnPercent
            resultPriceForm.value = resultPriceOnPercent
        } else {
            resultPriceElement.textContent = resultAllPricesSum
            resultPriceForm.value = resultAllPricesSum        
        }
    }
    calculatedForm()

    form.addEventListener('click', () => {
        calculatedForm()
    });

    // Локализация datepicker - начало
    $.datepicker.regional['ru'] = {
        closeText: 'Закрыть',
        prevText: 'Предыдущий',
        nextText: 'Следующий',
        currentText: 'Сегодня',
        monthNames: ['Январь','Февраль','Март','Апрель','Май','Июнь','Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'],
        monthNamesShort: ['Янв','Фев','Мар','Апр','Май','Июн','Июл','Авг','Сен','Окт','Ноя','Дек'],
        dayNames: ['воскресенье','понедельник','вторник','среда','четверг','пятница','суббота'],
        dayNamesShort: ['вск','пнд','втр','срд','чтв','птн','сбт'],
        dayNamesMin: ['Вс','Пн','Вт','Ср','Чт','Пт','Сб'],
        weekHeader: 'Не',
        dateFormat: 'dd.mm.yy',
        firstDay: 1,
        isRTL: false,
        showMonthAfterYear: false,
        yearSuffix: ''
    };
    $.datepicker.setDefaults($.datepicker.regional['ru']);
    //Инициализация
    $(function(){
        $("#datepicker").datepicker({
            minDate: 0
        });
    });
    // Локализация datepicker - конец


    // $(document).ready(function () {
    //     $("#calc__form").submit(function () {
    //         $.ajax({
    //             type: "POST",
    //             url: '/calculate-form.php',
    //             data: $(this).serialize(),
    //             // beforeSend: function () {
    //             //     // Вывод текста в процессе отправки
    //             //     $('.form__overlay').addClass('form__overlay--active');
    //             //     $('.form__overlay').html('<p style="text-align:center">Отправка...</p>');
    //             // },
    //             success: function (data) {
    //                 // Вывод текста результата отправки
    //                 $('.calc-form__overlay').addClass('calc-form-overlay--active').html('<p style="text-align:center">'+data+'</p>');
    //             },
    //             error: function (jqXHR, text, error) {
    //                 // Вывод текста ошибки отправкиe
    //                 console.error(error);
                    
    //             }
    //         });
    //         return false;
    //     });
    // });

    function calculatorFormSend() {
        const form = document.getElementById('calc__form')
        
        form.addEventListener('submit', async function(e) {
            e.preventDefault()
            fetch(form.action, {
                method: "POST",
                headers: {
                    "ContentType": "application/json"
                },
                body: new URLSearchParams(new FormData(form))
            })
            .then(response => {
                console.log(response)
                
            })
            .then(data => {
                console.dir(data);
            });
            // await fetch('calculate-form.php', {
            //     method: "POST",
            //     body: 
            // })

        })
    }
    calculatorFormSend()


    // document.getElementById('calc__form').onsubmit = async e => {
    //     e.preventDefault();
    //     let response = await fetch('calculate-form.php', {
    //         method: 'POST',
    //         body: new FormData(e.target) 
    //     });
    //     let result = await response.text();
    //     console.log(result);
    // };

}());


