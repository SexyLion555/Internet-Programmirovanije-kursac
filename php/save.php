<?php
    $email = $_POST['email'];
    $password = $_POST['password'];

    $listEmails = fopen("testfile.txt", "a");
    fclose($listEmails);

    $listEmails = fopen("testfile.txt", "r");
    while(!feof($listEmails))
        $content = fgets($listEmails);
        $carray = explode(";", $content); 
        
    foreach($carray as $i => $key) {
        $j = $i;                        
        }
    
    for ($i = 0; $i <= $j; $i++) {
        if (trim($email) == $carray[$i]) {
            echo "Эта почта существует, введите другую.";
            fclose($listEmails);
            exit;
        }
    }

    fclose($listEmails);

    if(trim($email) == '' || trim($password) == '') {
        echo "Вы не заполнили свою электронную почту либо свой пароль.";
        exit;
    }

    else {
        $listEmails = fopen("testfile.txt", "a");
        $listNames = fopen("names.txt", "a"); 
        fwrite($listNames, "\nEmail: $email;\nPassword: $password\n-----------------------");
        fwrite($listEmails, "$email;");
        echo "Регистрация прошла успешна.";
        fclose($listEmails);
    }

?>           
