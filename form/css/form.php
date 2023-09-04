<?php

$headers = 'Content-type: text/plain; charset="utf-8"';

$userName= $_POST['userName'];
$userMail= $_POST['userMail'];
$userPhone= $_POST['userPhone'];
$userTelegram= $_POST['userTelegram'];

$headers = 'MiME-Version: 1.0'. "\r\n";
$headers .= 'Content-type: text/html; charset="utf-8"';

$to = 'kira_shuk@bk.ru';
$subject = 'Заявка с сайта';
$message = "
<html>
<table>
<tr>
<td>Имя<td>
<td>$userName<td>
</tr>
<tr>
<td>Емайл<td>
<td>$userMail<td>
</tr>
<tr>
<td>Телефон<td>
<td>$userPhone<td>
</tr>
<tr>
<td>Телеграм<td>
<td>$userTelegram<td>
</tr>
</table>
</html>
";

 

mail ($to, $subject, $message, $headers);
echo 'Отправка формы';
header("Location:/success.html")



?>