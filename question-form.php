<?
if(
    (isset($_POST['name'])&&$_POST['name']!="") &&
    (isset($_POST['phone'])&&$_POST['phone']!="") &&
    (isset($_POST['question'])&&$_POST['phone']!="") &&
    (isset($_POST['email'])&&$_POST['email']!="")
    ){ //Проверка отправилось ли наше поля name и не пустые ли они
        $to = 'mail@yandex.ru'; //Почта получателя, через запятую можно указать сколько угодно адресов
        $subject = 'Запрос с сайта'; //Загаловок сообщения
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Имя: '.$_POST['name'].'</p>
                        <p>Телефон: '.$_POST['phone'].'</p>
                        <p>E-mail: '.$_POST['email'].'</p>
                        <p>Вопрос: '.$_POST['question'].'</p>
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers .= "From: Отправитель <from@example.com>\r\n"; //Наименование и почта отправителя
        mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
}
?>