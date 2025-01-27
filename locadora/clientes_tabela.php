<?php
    include 'conecta.php';

    $sql =  "SELECT * FROM clientes";
    $result = mysqli_query($conexao,$sql);

    while ($row = mysqli_fetch_assoc($result)){
        echo "ID: " . $row['id_cliente'] . "- Nome: " . $row['nome'] . "<br>";
    }
?>