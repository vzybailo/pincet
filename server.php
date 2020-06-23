<?php

    $choice = $_POST['user-choice'];
    $name = $_POST['user-name'];
    $phone = $_POST['user-email'];

    $mail_message = '
    <html>
        <head>
            <title>Заявка</title>
        </head>
        <body>
            <h2>Заказ</h2>
            <ul>
                <li> Программа: ' . $choice . ' </li>
                <li>Имя: ' . $name . '</li>
                <li>Телефон: ' . $phone . '</li>
            </ul>
        </body>
    </html>    
    ';

    $headers = "From: Администратор сайта <admin@pincet.by>\r\n".
    "MIME-Version: 1.0" . "\r\n" .
    "Content-type: text/html; charset=UTF-8" . "\r\n";

    $mail = mail('vental@bk.ru', 'Заказ', $mail_message, $headers);

    $data = [];

    if ($mail) {
        $data['status'] = "OK";
        $data['mes'] = "Письмо успешно отправлено";
    }else{
        $data['status'] = "NO";
        $data['mes'] = "На сервере произошла ошибка";
    }

    echo json_encode($data);


?>