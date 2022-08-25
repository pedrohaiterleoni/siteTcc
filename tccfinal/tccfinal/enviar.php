<?php

    $para = "cl200152@g.unicamp.com";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['mensage'];
    $mensagem = "Nome: $name<br>";
    $mensagem .= "Email: $email<br>";
    $mensagem .= "Mensagem: $message<br>";
    $headers = 'From: '.$email."\r\n". 'Reply-To: '.$para."\r\n";

    ini_set();
    if (mail($para,"site", $mensagem, $headers)){
        echo "Sua mensagem foi enviada com sucesso!";
    }
    else{
        echo "Aconteceu um erro, tente novamente mais tarde.";
    }

?>