<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="base.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="calculator.css">
    <title>Калькулятор стоимости</title>
</head>
<body>
    <section class="calculator__form">
        <div class="container">
            <h2>Рассчитать стоимость</h2>
            <form id="calc__form" class="calc__form" method="POST" action="<?php echo get_site_url(); ?>/calculate-form.php" enctype="multipart/form-data">
                <div class="form__body">
                    <div class="form__head">
                        <div class="number__rooms">
                            <div class="rooms-title">
                                <span>Количество комнат</span>
                                <div class="help-wrapper">
                                    <span class="help-trigger"></span>
                                    <div class="help-info">
                                        <span>1 комн. - 0 - 49м²</span>
                                        <span>2 комн. - 50 - 69м²</span>
                                        <span>3 комн. - 70 - 99м²</span>
                                        <span>4 комн. - 100 - 149м²</span>
                                    </div>
                                </div>
                            </div>
                            <div class="number__rooms-container">
                                <label class="room__item custom__radio" name="number_rooms">1
                                    <input type="radio" name="number_rooms" value="1" checked data-price="1000">
                                </label>
                                <label class="room__item custom__radio">2
                                    <input type="radio" name="number_rooms" value="2" data-price="2000">
                                </label>
                                <label class="room__item custom__radio">3
                                    <input type="radio" name="number_rooms" value="3" data-price="3000">
                                </label>
                                <label class="room__item custom__radio">4
                                    <input type="radio" name="number_rooms" value="4" data-price="4000">
                                </label>
                                <label class="room__item custom__radio">5
                                    <input type="radio" name="number_rooms" value="5" data-price="5000">
                                </label>
                            </div>
                        </div>
                        <div class="type__cleaning">
                            <div class="type__cleaning-title">
                                <span>Тип уборки</span>
                                <div class="help-wrapper">
                                    <span class="help-trigger"></span>
                                    <div class="help-info">
                                        <span>1 комн. - 0 - 49м²</span>
                                        <span>2 комн. - 50 - 69м²</span>
                                        <span>3 комн. - 70 - 99м²</span>
                                        <span>4 комн. - 100 - 149м²</span>
                                    </div>
                                </div>
                            </div>
                            <div class="type__cleaning-container">
                                <label class="type__item custom__radio">Регулярная
                                    <input type="radio" name="type_cleaning" value="регулярная" checked data-price="1500">
                                </label>
                                <label class="type__item custom__radio">Генеральная
                                    <input type="radio" name="type_cleaning" value="генеральная" data-price="2000">
                                </label>
                                <label class="type__item custom__radio">После ремонта
                                    <input type="radio" name="type_cleaning" value="после ремонта" data-price="3000">
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="additional__services">
                        <div class="reset__wrapper">
                            <span>Дополнительные услуги</span>
                            <button id="reset-form" class="reset__btn" type="reset">сбросить</button>
                        </div>
                        <div class="service__item">
                            <span>Особые поручения</span>
                            <span class="price">450 ₽ / 30мин</span>
                            <div class="input__btns">
                                <button type="button" class="decrement">-</button>
                                <input class="service-count" type="number" name="service_1" value="0" min="0" max="99" data-price="450" placeholder="0">
                                <button type="button" class="increment">+</button>
                            </div>
                            <div class="help-wrapper">
                                <span class="help-trigger"></span>
                                <div class="help-info">
                                    <span>Например: помыть кота, разложить вещи по цветам, отнести вещи в химчистку</span>
                                </div>
                            </div>
                        </div>
                        <div class="service__item">
                            <span>Мытье духовки внутри</span>
                            <span class="price">600 ₽ / шт.</span>
                            <div class="input__btns">
                                <button type="button" class="decrement">-</button>
                                <input class="service-count" type="number" name="service_2" value="0" min="0" max="99" data-price="600" placeholder="0">
                                <button type="button" class="increment">+</button>
                            </div>
                            <div class="help-wrapper">
                                <span class="help-trigger"></span>
                                <div class="help-info">
                                    <span>Обезжиривание и очистка духового шкафа</span>
                                </div>
                            </div>
                        </div>
                        <div class="service__item">
                            <span>Мытье СВЧ внутри</span>
                            <span class="price">400 ₽ / шт.</span>
                            <div class="input__btns">
                                <button type="button" class="decrement">-</button>
                                <input class="service-count" type="number" name="service_3" value="0" min="0" max="99" data-price="400" placeholder="0">
                                <button type="button" class="increment">+</button>
                            </div>
                            <div class="help-wrapper">
                                <span class="help-trigger"></span>
                                <div class="help-info">
                                    <span>Обезжиривание и очистка СВЧ</span>
                                </div>
                            </div>
                        </div>
                        <div class="service__item">
                            <span>Мытье холодильника внутри</span>
                            <span class="price">500 ₽ / шт.</span>
                            <div class="input__btns">
                                <button type="button" class="decrement">-</button>
                                <input class="service-count" type="number" name="service_4" value="0" min="0" max="99" data-price="500" placeholder="0">
                                <button type="button" class="increment">+</button>
                            </div>
                            <div class="help-wrapper">
                                <span class="help-trigger"></span>
                                <div class="help-info">
                                    <span>Если необходимо, чтобы специалист самостоятельно разгрузил продукты и вернул их обратно в холодильник - не забудьте добавить «особое поручение»</span>
                                </div>
                            </div>
                        </div>
                        <div class="service__item">
                            <span>Мойка окон</span>
                            <span class="price">400 ₽ / створка</span>
                            <div class="input__btns">
                                <button type="button" class="decrement">-</button>
                                <input class="service-count" type="number" name="service_5" value="0" min="0" max="99" data-price="400" placeholder="0">
                                <button type="button" class="increment">+</button>
                            </div>
                            <div class="help-wrapper">
                                <span class="help-trigger"></span>
                                <div class="help-info">
                                    <span>Цена за 1 створку окна, целиком с двух сторон. Балконная дверь считается как 2 створки</span>
                                </div>
                            </div>
                        </div>
                        <div class="service__item">
                            <span>Мытье люстры</span>
                            <span class="price">500 ₽ / шт.</span>
                            <div class="input__btns">
                                <button type="button" class="decrement">-</button>
                                <input class="service-count" type="number" name="service_6" value="0" min="0" max="99" data-price="500" placeholder="0">
                                <button type="button" class="increment">+</button>
                            </div>
                            <div class="help-wrapper">
                                <span class="help-trigger"></span>
                                <div class="help-info">
                                    <span>Указывайте только те люстры, которые висят на потолке</span>
                                </div>
                            </div>
                        </div>
                        <div class="service__item">
                            <span>Глажка</span>
                            <span class="price">450 ₽ / 30мин</span>
                            <div class="input__btns">
                                <button type="button" class="decrement">-</button>
                                <input class="service-count" type="number" name="service_7" value="0" min="0" max="99" data-price="450" placeholder="0">
                                <button type="button" class="increment">+</button>
                            </div>
                            <div class="help-wrapper">
                                <span class="help-trigger"></span>
                                <div class="help-info">
                                    <span>Профессионально гладим одежду</span>
                                </div>
                            </div>
                        </div>
                        <div class="service__item">
                            <span>Поменять белье</span>
                            <span class="price">250 ₽ / шт.</span>
                            <div class="input__btns">
                                <button type="button" class="decrement">-</button>
                                <input class="service-count" type="number" name="service_8" value="0" min="0" max="99" data-price="250" placeholder="0">
                                <button type="button" class="increment">+</button>
                            </div>
                            <div class="help-wrapper">
                                <span class="help-trigger"></span>
                                <div class="help-info">
                                    <span>Поменяем комплект белья оставленный вами в указанном месте</span>
                                </div>
                            </div>
                        </div>
                        <div class="service__item">
                            <span>Уборка на балконе</span>
                            <span class="price">500 ₽ / шт.</span>
                            <div class="input__btns">
                                <button type="button" class="decrement">-</button>
                                <input class="service-count" type="number" name="service_9" value="0" min="0" max="99" data-price="500" placeholder="0">
                                <button type="button" class="increment">+</button>
                            </div>
                            <div class="help-wrapper">
                                <span class="help-trigger"></span>
                                <div class="help-info">
                                    <span>Мытье пола, обеспыливание поверхностей на балконе (мойка окон не входит в стоимость)</span>
                                </div>
                            </div>
                        </div>
                        <div class="service__item single__service">
                            <span>Эко-уборка</span>
                            <span class="price">+40% к стоимости</span>
                            <label class="custom__checkbox">
                                <span class="text-btn">Добавить</span>
                                <input id="percent" class="checkbox" type="checkbox" name="service_10" data-price="40" value="да">
                            </label>
                            <div class="help-wrapper">
                                <span class="help-trigger"></span>
                                <div class="help-info">
                                    <span>Полная эко уборка квартиры лучшими средствами - Ecover, Kiehl</span>
                                </div>
                            </div>
                        </div>
                        <div class="service__item single__service">
                            <span>Парогенератор</span>
                            <span class="price">+900 ₽</span>
                            <label class="custom__checkbox">
                                <span class="text-btn">Добавить</span>
                                <input class="checkbox" type="checkbox" name="service_11" data-price="900" value="да">
                            </label>
                            <div class="help-wrapper">
                                <span class="help-trigger"></span>
                                <div class="help-info">
                                    <span>Отлично чистит межплиточные швы, дезинфицирует сантехнику, удаляет трудные загрязнения</span>
                                </div>
                            </div>
                        </div>
                        <div class="service__item single__service">
                            <span>Доставка спец. оборудования</span>
                            <span class="price">+500 ₽</span>
                            <label class="custom__checkbox">
                                <span class="text-btn">Добавить</span>
                                <input class="checkbox" type="checkbox" name="service_12" data-price="500" value="да">
                            </label>
                            <div class="help-wrapper">
                                <span class="help-trigger"></span>
                                <div class="help-info">
                                    <span>Доставка строительного пылесоса и стремянки, если это необходимо для уборки в вашей квартире</span>
                                </div>
                            </div>
                        </div>
                        <div class="service__item single__service">
                            <span>Заехать за ключами</span>
                            <span class="price">+500 ₽</span>
                            <label class="custom__checkbox">
                                <span class="text-btn">Добавить</span>
                                <input class="checkbox" type="checkbox" name="service_13" data-price="500" value="да">
                            </label>
                            <div class="help-wrapper">
                                <span class="help-trigger"></span>
                                <div class="help-info">
                                    <span>Если у вас совсем нет времени, мы поможем :)</span>
                                </div>
                            </div>
                        </div>
                        <div class="service__item">
                            <span>Уборка санузла</span>
                            <span class="price">+600 ₽ / шт.</span>
                            <div class="input__btns">
                                <button type="button" class="decrement">-</button>
                                <input class="service-count" type="number" name="service_14" value="0" min="0" max="99" data-price="600" placeholder="0">
                                <button type="button" class="increment">+</button>
                            </div>
                            <div class="help-wrapper">
                                <span class="help-trigger"></span>
                                <div class="help-info">
                                    <span>1 санузел «уже» входит в базовую стоимость, даже если он раздельный</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebar__form">
                    <div class="calculate__result">
                        <p>Уборка квартиры с <span id="rooms">1</span> <span id="rooms-text">жилой комнатой</span> и одним санузлом</p>
                        <div class="calculate__price">
                            <span>К оплате</span>
                            <div>
                                <input type="text" name="cost" id="clining-cost-form" hidden>
                                <span id="clining-cost"></span>
                                <span>₽</span>
                            </div>
                        </div>
                        <!-- <div class="calculate__time">
                            <span>Примерное время уборки</span>
                            <span>≈ 2 ч 30 мин</span>
                        </div> -->
                    </div>
                    <input type="text" name="name" required placeholder="Ваше имя">
                    <input class="phone-mask" type="tel" name="phone" required placeholder="Ваш телефон">
                    <div class="datepicker__wrapper">
                        <input id="datepicker" class="datepicker" type="text" readonly  name="date_clining" placeholder="Выберите дату">
                    </div>
                    <textarea name="comment" placeholder="Комментарий к заказу"></textarea>
                    <button type="submit" class="btn hover-btn"><span>отправить</span></button>
                </div>
                <div class="calc-form__overlay"></div>
            </form>
        </div>
    </section>
    <script src="/assets/js/jquery-3.7.1.min.js"></script>
    <script src="/assets/js/jquery-ui.min.js"></script>
    <script src="/assets/js/jquery.event.move.js"></script>
    <script src="/assets/js/jquery.maskedinput.min.js"></script>
    <script src="calculator.js"></script>
</body>
</html>
