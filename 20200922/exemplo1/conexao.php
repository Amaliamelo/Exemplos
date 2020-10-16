<?php

    $hot = "localhost";
    $usuario="root";
    $senha="";
    $bd="escola";

    if(!$conexao = mysqli_connect($hot,$usuario,$senha, $bd)){
        echo "Falha na conexão";
        mysqli_connect_error();
    }
    /*if($conexão = mysqli_connect($hot,$usuario,$senha, $bd)){
        echo "Conectado";
    }
    else{
        echo "Falha na conexão";
    }*/
?>