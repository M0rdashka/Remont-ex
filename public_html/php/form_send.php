<?
if((isset($_POST['arrival'])&&$_POST['arrival']!="")&&(isset($_POST['number'])&&$_POST['number']!="")&&(isset($_POST['name'])&&$_POST['name']!="")){ 
        $to = 'a.y.orlov1@gmail.com'; 
        $subject = 'Ремонт экспресс';
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Вопрос: '.$_POST['arrival'].'</p>
                        <p>Телефон: '.$_POST['number'].'</p>    
                        <p> Имя: '.$_POST['name'].'</p>
                    </body>
                </html>';
        $headers  = "Content-type: text/html; charset=utf-8 \r\n";
        $headers .= "From: Отправитель <apeji@mail.ru>\r\n"; //Наименование и почта отправителя
        mail($to, $subject, $message, $headers);
}
?>