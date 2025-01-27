<?php
    $sevidor = "127.0.0.1";
    $usuario = "root";
    $senha = "";
    $bancoDados = "locadora";

    $conexao = mysqli_connect($sevidor,$usuario, $senha, $bancoDados) or die ("problemas para conectar");

    if(!$conexao){
        die("Falha no conexão: " . mysqli_connect_error());
    }
?>