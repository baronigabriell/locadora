<?php
    include 'conexao.php';

    if(isset($_POST['locar'])){
        $id_cliente = $_POST['id_cliente'];
        $id_veiculo = $_POST['id_veiculo'];
        $data_inicio = $_POST['data_inicio'];
        $data_fim = $_POST['data_fim'];
        $sql_veiculo = "SELECT valor_diaria from VEICULOS WHERE id_veiculo = '$id_veiculo'";
        $result_veiculo = mysqli_query($conexao,$sql_veiculo);
        $veiculo  = mysqli_fetch_assoc($result_veiculo);
        $valor_total = (strtotime($data_fim) - strtotime($data_inicio)) / (60 * 60 *24) * $veiculo['valor_diaria'];

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
    <label>ID Cliente:</label>
    <input type="text" name="id_cliente" required><br>
    <label>ID Veículo:</label>
    <input type="text" name="id_veiculo" required><br>
    <label>Data início:</label>
    <input type="text" name="data_inicio" required><br>
    <label>Data fim:</label>
    <input type="text" name="data_fim" required><br>
    <button type="submit" name="locar">Realizar locação</button>
</form>