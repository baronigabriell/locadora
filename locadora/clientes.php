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
                <input type="text" id="servicox" name="nome" class="input" required>
                <label for="nomex" class="label">Nome:</label>
            </div>
            <div class="single-input">
                <input type="text" name="cpf" id="cpf" class="input" required>
                <label for="cpfx" class="label">CPF:</label>
            </div>
            <div class="single-input">
                <input type="text" id="servicox" name="telefone" class="input" required>
                <label for="telefonex" class="label">Telefone:</label>
            </div>
            <div class="single-input">
                <input type="text" id="tecnicox" name="email" class="input" required>
                <label for="emailx" class="label">E-mail:</label>
            </div>
            <div class="single-input">
                <input type="text" id="tecnicox" name="endereco" class="input" required>
                <label for="enderecox" class="label">Endereço:</label>
            </div>
            <button type="submit" name="cadastrar" class="botao">Cadastrar</button>
        </form>
        <a href="consultacliente.php">
            <input class="botao" type="submit" value="Consultar">
        </a>
    </div>
</body>
<script>
    const cpf = document.querySelector('#cpf');

    cpf.addEventListener('keypress', () => {
        cpflength = cpf.value.length;

        if (cpflength === 3 || cpflength === 7) {
            cpf.value += '.';
        } else if (cpflength === 11) {
            cpf.value += '-';
        }
    });
</script>