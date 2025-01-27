<?php
    include 'conexao.php';

    if(isset($_POST['locar'])){
        $id_cliente = $_POST['modelo'];
        $id_veiculo = $_POST['marca'];
        $data_inicio = $_POST['ano'];
        $data_fim = $_POST['placa'];
        $sql_veiculo = "SELECT valor_diaria from VEICULOS WHERE id_veiculo = '$id_veiculo'";
        $result_veiculo = mysqli_query($conexao,$sql_veiculo);
        $veiculo  = mysqli_fetch_assoc($result_veiculo);
        $valor_total = (strtotime($data_fim) - strtotime($data_inicio)) / (60 * 60 *24) * $veiculo['valor_diaria']

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