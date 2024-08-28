<meta http-equiv='refresh' content='6; url=index.html'>
<meta charset="UTF-8" />
<?php
if (isset($_POST['name'])) {$name = $_POST['name']; if ($name == '') {unset($name);}}
if (isset($_POST['number'])) {$email = $_POST['number']; if ($number == '') {unset($number);}}
if (isset($_POST['arrival'])) {$body = $_POST['arrival']; if ($arrival == '') {unset($arrival);}}
 
if (isset($name) && isset($number) && isset($arrival)){
 
$address = "a.y.orlov1@gmail.com";
$subject = "Ремонт экспресс";
$email = "morozova@remont-express.ru"
$mes = "Имя: $name \nТелефон: $number \nТекст: $arrival";
$send = mail ($address,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
if ($send == 'true')
{echo "Сообщение отправлено успешно, через 6 секунд Вы будете направлены на главную страницу сайта <a href='http://remont-express.pro/'>Ремонт Экспресс</a>,где сможете продолжить ваш просмотр";}
else {echo "Ошибка, сообщение не отправлено!";}
 
}
else
{
echo "Вы заполнили не все поля, вернитесь назад и заполните необходимые поля";
}
?>