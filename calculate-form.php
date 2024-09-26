<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die();
}

// if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' && !empty($_POST['name'])) {
    
    if($_POST['number_rooms']) {
        $message = ' <b>Количество комнат:</b> ' . $_POST['number_rooms'] . ' <br> ';
    }
    if($_POST['type_cleaning']) {
        $message .= ' <b>Тип уборки:</b> ' . $_POST['type_cleaning'] . ' <br> ';
    }
    if($_POST['service_1'] > 0) {
        $message .= ' <b>Особые поручения:</b> ' . $_POST['service_1'] . ' <br> ';
    }
    if($_POST['service_2'] > 0) {
        $message .= ' <b>Мытье духовки внутри:</b> ' . $_POST['service_2'] . ' <br> ';
    }
    if($_POST['service_3'] > 0) {
        $message .= ' <b>Мытье СВЧ внутри:</b> ' . $_POST['service_3'] . ' <br> ';
    }
    if($_POST['service_4'] > 0) {
        $message .= ' <b>Мытье холодильника внутри:</b> ' . $_POST['service_4'] . ' <br> ';
    }
    if($_POST['service_5'] > 0) {
        $message .= ' <b>Мойка окон:</b> ' . $_POST['service_5'] . ' <br> ';
    }
    if($_POST['service_6'] > 0) {
        $message .= ' <b>Мытье люстры:</b> ' . $_POST['service_6'] . ' <br> ';
    }
    if($_POST['service_7'] > 0) {
        $message .= ' <b>Глажка:</b> ' . $_POST['service_7'] . ' <br> ';
    }
    if($_POST['service_8'] > 0) {
        $message .= ' <b>Поменять белье:</b> ' . $_POST['service_8'] . ' <br> ';
    }
    if($_POST['service_9'] > 0) {
        $message .= ' <b>Уборка на балконе:</b> ' . $_POST['service_9'] . ' <br> ';
    }
    if($_POST['service_10']) {
        $message .= ' <b>Эко-уборка:</b> ' . $_POST['service_10'] . ' <br> ';
    }
    if(!empty($_POST['service_11'])) {
        $message .= ' <b>Парогенератор:</b> ' . $_POST['service_11'] . ' <br> ';
    }
    if(!empty($_POST['service_12'])) {
        $message .= ' <b>Доставка спец. оборудования:</b> ' . $_POST['service_12'] . ' <br> ';
    }
    if(!empty($_POST['service_13'])) {
        $message .= ' <b>Заехать за ключами:</b> ' . $_POST['service_13'] . ' <br> ';
    }
    if($_POST['service_14'] > 0) {
        $message .= ' <b>Уборка санузла:</b> ' . $_POST['service_14'] . ' <br> ';
    }
    if($_POST['name']) {
        $message .= ' <b>Имя:</b> ' . $_POST['name'] . ' <br> ';
    }
    if($_POST['phone']) {
        $message .= ' <b>Номер телефона:</b> ' . $_POST['phone'] . ' <br> ';
    }
    if($_POST['date_clining']) {
        $message .= ' <b>Дата уборки:</b> ' . $_POST['date_clining'] . ' <br> ';
    }
    if($_POST['comment']) {
        $message .= ' <b>Комментарий:</b> ' . $_POST['comment'] . ' <br> ';
    }
    if($_POST['cost']) {
        $message .= ' <b>Рассчетная стоимость:</b> ' . $_POST['cost'] . ' рублей <br> ';
    }


    $mailTo = "aleksandrlisin.dev@gmail.com"; // Ваш e-mail
    $subject = "Письмо с сайта"; // Тема сообщения
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";
    $headers .= "From: <cleaning-tula.ru>\r\n";
    if(mail($mailTo, $subject, $message, $headers)) {
        echo "Спасибо, " . $_POST['name'] . ".<br> Мы свяжемся с вами в самое ближайшее время!";
    } else {
        echo "Сообщение не отправлено!";
    }
// }
?>