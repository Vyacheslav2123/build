<?php
$nick = $_POST['nick'];
$number = $_POST['number'];



$to = 'ryazan500600@gmail.com';
$subject = 'ск62.рф';



$message = "<div style='color:blue;font-size: 15px;'>" . "Имя: " . $nick . "<br>" . "Номер телефона: " . $number . "</div>";

$headers = 'From: ryazan500600@gmail.com' . "\r\n" .
'Reply-To: ryazan500600@gmail.com' . "\r\n" .
'X-Mailer: PHP/' . phpversion() . "\r\n" .
'MIME-Version: 1.0' . "\r\n" .
'Content-type: text/html; charset=iso-8859-1' . "\r\n";


mail($to, $subject, $message, $headers); 
header('Location: index.html');
?>