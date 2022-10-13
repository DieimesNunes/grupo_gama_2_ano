<?php

    $servidor="localhost";
    $usuario="gama2ano";
    $senha="2022";
    $banco="paradadope";

    $mysqli = new mysqli($servidor, $usuario, $senha, $banco);

    if ($mysqli->connect_errno){
        echo "Não deu certo " . $mysqli->connect_error;
        exit();
    }

?>
    