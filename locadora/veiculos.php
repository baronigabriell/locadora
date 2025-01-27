<?php
    include 'conexao.php';

    if(isset($_POST['cadastrar'])){
        $modelo = $_POST['modelo'];
        $marca = $_POST['marca'];
        $ano = $_POST['ano'];
        $placa = $_POST['placa'];
        $valor_diaria = $_POST['valor_diaria'];

        $sql = "INSERT INTO veiculos (modelos, marca, ano, placa, valor_diaria)
        VALUES ('$modelo','$marca','$ano','$placa','$valor_diaria')";
        
        if(mysqli_query($conexao, $sql)){
            echo "Veículo cadastrado com sucesso!";
        }else{
            echo "Erro: " . mysqli_error($conexao);
        }
    }
?>

<form method="post" action="">
    <label>Marca:</label>
    <input type="text" name="marca" required><br>
    <label>Marca:</label>
    <input type="text" name="marca" required><br>
    <label>Ano:</label>
    <input type="text" name="ano" required><br>
    <label>Placa:</label>
    <input type="text" name="placa" required><br>
    <label>Endereço:</label>
    <input type="text" name="endereco" required><br>
    <button type="submit" name="cadastrar">Cadastrar</button>
</form>