<h1>
<?php

    $email = $_POST['email'];
    $message = $_POST['message'];

    $error = '';
    if(strlen($message) >= 1000)
        $error = 'Максимум 1000 символов!';

    if ($error != '') {
        echo $error;
        exit();
    }

    
    $subject = "=?utf-8?B?".base64_encode("Сообщение")."?=";
    $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";

    mail("wwiedienski@gmail.com", $subject, $message, $headers);

    header('Location: ../menu_send_message.html');

?>
</h1>