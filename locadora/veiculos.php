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
                <input type="text" id="servicox" name="marca" class="input" required>
                <label for="marcax" class="label">Marca:</label>
            </div>
            <div class="single-input">
                <input type="text" id="tecnicox" name="modelo" class="input" required>
                <label for="modelox" class="label">Modelo:</label>
            </div>
            <div class="single-input">
                <input type="text" id="servicox" name="ano" class="input" required>
                <label for="anox" class="label">Ano:</label>
            </div>
            <div class="single-input">
                <input type="text" id="tecnicox" name="placa" class="input" required>
                <label for="placax" class="label">Placa:</label>
            </div>
            <div class="single-input">
                <input type="text" id="tecnicox" name="endereco" class="input" required>
                <label for="enderecox" class="label">Endereço:</label>
            </div>
            <button type="submit" name="cadastrar" class="botao">Cadastrar</button>
        </form>
        <a href="consultaveiculos.php">
            <input class="botao" type="submit" value="Consultar">
        </a>
    </div>
</body>