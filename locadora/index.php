<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Document</title>
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
    <main>
        <section id="home">
            <div id="product-class">
                <img src="locadora.jpeg" alt="" style="height: auto; width: 1519.2px; display: block;">
                <div id="overlay-home">
                    <h1 class="overlay-text">Diversão para todas as idades!</h1>
                    <p class="overlay-text" style="margin-top: 0; width: 40%; text-align: justify;">
                    Prepare-se para uma experiência refrescante e cheia de emoção no SPLASH, a atração aquática mais emocionante do nosso parque de diversões! Aqui, adrenalina e diversão se encontram em um passeio que promete molhar até os mais corajosos.
                    </p>
                    <a href="clientes.php">
                        <button>Cadastro de clientes</button>
                    </a>
                    <br>
                    <a href="locacao.php">
                        <button>Locações</button>
                    </a>
                    <br>
                    <a href="veiculos.php">
                        <button>Cadastro de veículos</button>
                    </a>
                </div>
            </div>
        </section>
        <section id="contato">
            <img src="ondas.png" alt="ondas" >
            <div class="form" style="position: absolute; top: 52%; left: 50%; transform: translate(-50%,-50%);">
                <h1>Central de dúvidas</h1>
                <form method="POST">
                    <div class="single-input">
                        <input type="text" id="nomex" name="nomex" class="input" required>
                        <label for="nomex" class="label">Nome</label>
                    </div>
                    <div class="single-input">
                        <input type="text" id="cpfx" name="cpfx" class="input" required>
                        <label for="cpfx" class="label">E-mail</label>
                    </div>
                    <div class="single-input">
                        <input type="text" id="telefonex" name="telefonex" class="input" required>
                        <label for="telefonex" class="label">Telefone</label>
                    </div>
                    <div class="single-input">
                        <input type="text" id="ingressox" name="ingressox" class="input" required>
                        <label for="ingressox" class="label">Mande sua dúvida</label>
                    </div>
                    <input class="botao" type="submit" value="Enviar">
                </form>
            </div>
        </section>
    </main>
</body>
<footer>
        <a href="index.php" style="font-size: 0;">
            <img src="logo.png" alt="logotipo da locafeliz" id="logo" style="margin-top: 0;">    
        </a>
        <p style="position: absolute; left: 50%; transform: translate(-50%,0);">locafel:)z &copy 2025 - Todos os direitos reservados</p>
    </footer>
</html>