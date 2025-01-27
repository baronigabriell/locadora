<?php
    include 'conexao.php';

    if(isset($_POST['cadastrar'])){
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $telefone = $_POST['telefone']; 
        $email = $_POST['email'];
        $endereco = $_POST['endereco'];

        $sql = "INSERT INTO clientes (nome, cpf, telefone, email, endereco) VALUES ('$nome','$cpf','$telefone','$email','$endereco')";

        if(mysqli_query($conexao,$sql)){
            echo "Cliente cadastrado com sucesso!";
        }else{
            echo "Erro: " . mysqli_error($conexao);
        }
    }
?>

<form method="post" action="">
    <label>Nome:</label>
    <input type="text" name="nome" required><br>
    <label>CPF:</label>
    <input type="text" name="cpf" required><br>
    <label>telefone:</label>
    <input type="text" name="telefone" required><br>
    <label>E-mail:</label>
    <input type="text" name="email" required><br>
    <label>Endereço:</label>
    <input type="text" name="endereco" required><br>
    <button type="submit" name="cadastrar">Cadastrar</button>
</form>