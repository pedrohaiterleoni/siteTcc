<?php

    //conectando ao BD
    try {        
        // conexão PDO    // IP, nomeBD, usuario, senha        
        $pdo = new PDO('mysql:host=143.106.241.3;dbname=cl200129;charset=utf8', 'cl200129', 'cl*19092004');
        
        // ativar o depurador de erros
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $output = 'Conexão estabelecida. <br>';
    } catch (PDOException $e) {
        $output = 'Impossível conectar BD : ' . $e . '<br>';
    }
    //echo $output;
?>