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
<head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <a href="index.php" style="font-size: 0;">
            <img src="logo.png" alt="logotipo da locafeliz" id="logo">    
        </a>
        <nav>
            <a href="index.php"><p class="text-nav">HOME</p></a>
            <a href="#contato"><p class="text-nav">CONTATO</p></a>
        </nav>
    </header>
    <div class="form" style="position: absolute; top: 58%; left: 50%; transform: translate(-50%,-50%);">
        <h1>Cadastro de clientes</h1>
        <form method="POST" action="">
            <div class="single-input">
                <input type="text" id="servicox" name="id_cliente" class="input" required>
                <label for="id_clientex" class="label">ID Cliente:</label>
            </div>
            <div class="single-input">
                <input type="text" id="tecnicox" name="id_veiculo" class="input" required>
                <label for="id_veiculox" class="label">ID Veículo:</label>
            </div>
            <div class="single-input">
                <input type="text" id="servicox" name="data_inicio" class="input" required>
                <label for="data_iniciox" class="label">Data início:</label>
            </div>
            <div class="single-input">
                <input type="text" id="tecnicox" name="data_fim" class="input" required>
                <label for="data_fimx" class="label">Data fim:</label>
            </div>
            <button type="submit" name="locar" class="botao">Locar</button>
        </form>
        <a href="consultacliente.php">
            <input class="botao" type="submit" value="Consultar">
        </a>
    </div>
</body>