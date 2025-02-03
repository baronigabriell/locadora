<?php 
include "conexao.php"; 

$busca = '';

if (!empty($_POST['placa'])) {
    $busca = $_POST['cpfx'];
}
?>
<html>
<head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<header>
    <a href="index.php" style="font-size: 0;">
        <img src="logo.png" alt="logotipo da locafeliz" id="logo">    
    </a>
    <nav>
        <a href="index.php"><p class="text-nav">HOME</p></a>
        <a href="#contato"><p class="text-nav">CONTATO</p></a>
    </nav>
</header>
<body>
    <div>
        <form method="POST" action="" style="width: 100%; display: flex; justify-content: center;">
            <div class="box" style="width: 32%; bottom: 0;">
                <div class="single-input">
                    <input type="text" id="cpf" name="cpfx" class="input" value="<?php echo htmlspecialchars($busca); ?>" required>
                    <label for="nomex" class="label">CPF do cliente</label>
                    <button type="submit" class="pesquisar">
                        <img class="lupa" src="../img/lupa.png" alt="lupa">
                    </button>
                </div>
                <?php
                if (!empty($busca)) {
                    echo "<table>";
                    echo "<div>";
                    echo "<tr><th>Nome</th><th>CPF</th><th>Telefone</th><th>Ingresso</th></tr>";
                    $query = mysqli_query($conexao, "SELECT modelo, marca, ano, placa, valor_diaria FROM veiculos WHERE placa LIKE '%$busca%' GROUP BY 1");
                    if (mysqli_num_rows($query) > 0) {
                        while ($saida = mysqli_fetch_array($query)) {
                            $modelo = $saida['modelo'];
                            $marca = $saida['marca'];
                            $ano = $saida['ano'];
                            $placa = $saida['placa'];
                            $valor_diaria = $saida['valor_diaria'];
                            echo "<tr>";
                            echo "<tr>";
                            echo "<td class='titulo'>" . htmlspecialchars($nome) . "</td>";
                            echo "<td class='titulo'>" . htmlspecialchars($cpf) . "</td>";
                            echo "<td class='titulo'>" . htmlspecialchars($telefone) . "</td>";
                            echo "<td class='titulo'>" . htmlspecialchars($ingresso) . "</td>";
                            echo "<td id='excluir'><a href='exclusaoveiculos.php?id=<?php echo $codigo; ?>'>
                            <button class='deleteButton'>
                                <svg
                                    xmlns='http://www.w3.org/2000/svg'
                                    fill='none'
                                    viewBox='0 0 50 59'
                                    class='bin'
                                >
                                    <path
                                    fill='#666
                                    d='M0 7.5C0 5.01472 2.01472 3 4.5 3H45.5C47.9853 3 50 5.01472 50 7.5V7.5C50 8.32843 49.3284 9 48.5 9H1.5C0.671571 9 0 8.32843 0 7.5V7.5Z'
                                    ></path>
                                    <path
                                    fill='#666'
                                    d='M17 3C17 1.34315 18.3431 0 20 0H29.3125C30.9694 0 32.3125 1.34315 32.3125 3V3H17V3Z'
                                    ></path>
                                    <path
                                    fill='#666'
                                    d='M2.18565 18.0974C2.08466 15.821 3.903 13.9202 6.18172 13.9202H43.8189C46.0976 13.9202 47.916 15.821 47.815 18.0975L46.1699 55.1775C46.0751 57.3155 44.314 59.0002 42.1739 59.0002H7.8268C5.68661 59.0002 3.92559 57.3155 3.83073 55.1775L2.18565 18.0974ZM18.0003 49.5402C16.6196 49.5402 15.5003 48.4209 15.5003 47.0402V24.9602C15.5003 23.5795 16.6196 22.4602 18.0003 22.4602C19.381 22.4602 20.5003 23.5795 20.5003 24.9602V47.0402C20.5003 48.4209 19.381 49.5402 18.0003 49.5402ZM29.5003 47.0402C29.5003 48.4209 30.6196 49.5402 32.0003 49.5402C33.381 49.5402 34.5003 48.4209 34.5003 47.0402V24.9602C34.5003 23.5795 33.381 22.4602 32.0003 22.4602C30.6196 22.4602 29.5003 23.5795 29.5003 24.9602V47.0402Z'
                                    clip-rule='evenodd'
                                    fill-rule='evenodd'
                                    ></path>
                                    <path fill='#666' d='M2 13H48L47.6742 21.28H2.32031L2 13Z'></path>
                                </svg>

                                <span class='tooltip'>Delete</span>
                            </button>
                            </a></td>";
                            echo "<td id='alterar'><a href='alteracaocan.php?id=" . $codigo . "'>
                            <label class='container'>
                                <input type='checkbox'>
                                <svg id='Glyph' version='1.1' viewBox='0 0 32 32' xml:space='preserve' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'><path d='M29.845,17.099l-2.489,8.725C26.989,27.105,25.804,28,24.473,28H11c-0.553,0-1-0.448-1-1V13  c0-0.215,0.069-0.425,0.198-0.597l5.392-7.24C16.188,4.414,17.05,4,17.974,4C19.643,4,21,5.357,21,7.026V12h5.002  c1.265,0,2.427,0.579,3.188,1.589C29.954,14.601,30.192,15.88,29.845,17.099z' id='XMLID_254_'></path><path d='M7,12H3c-0.553,0-1,0.448-1,1v14c0,0.552,0.447,1,1,1h4c0.553,0,1-0.448,1-1V13C8,12.448,7.553,12,7,12z   M5,25.5c-0.828,0-1.5-0.672-1.5-1.5c0-0.828,0.672-1.5,1.5-1.5c0.828,0,1.5,0.672,1.5,1.5C6.5,24.828,5.828,25.5,5,25.5z' id='XMLID_256_'></path></svg>
                            </label>
                            </a></td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5'>Nenhum registro encontrado.</td></tr>";
                    }
                    mysqli_close($conexao);
                    echo "</table>";
                    echo "</div>";
                }
                ?>
            </div>
        </form>
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
<style>
    body {
        position: relative;
    }
    form {
        margin: 0 0 0;
    }
    div.single-input {
        position: relative;
    }
    div.single-input .input {
        background-color: #f3edf3;
        border-bottom: 2px solid black;
        width: 100%;
        color: black;
        position: relative;
    }
    div.single-input .label {
        color: black;
    }
    .box {
        justify-content: space-between;
        background-color: #f3edf3;
        padding: 30px 45px;
        border-radius: 40px 40px 0 0;
        height: 500px;
        align-self: flex-start;
        position: absolute;
        bottom: 0;
        color: black;
    }
    form .pesquisar {
        position: absolute;
        right: 0;
        width: 20px;
        height: 20px;
        padding: 0 0;
        background: transparent;
        border: none;
        cursor: pointer;
        z-index: 1;
        margin: 0 0 0;
    }
    .lupa {
        max-width: 20px;
        max-height: 20px;
        width: auto;
        height: auto;
    }
    .resultado {
        margin-top: 20px;
        padding: 10px;
        background-color: #e6e6e6;
        border-radius: 10px;
        color: black;
        text-align: center;
    }
    table {
        width: 100%;
        margin-top: 20px;
        border-collapse: collapse;
    }
    table th, table td {
        padding: 8px;
        color: #666;
    }
    table th {
        background-color: #f3edf3;
        text-align: left;
    }
    .deleteButton {
        width: 40px;
        height: 40px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 3px;
        background-color: transparent !important;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        transition: all 0.2s;
        position: relative;
        overflow: hidden;
    }
    .deleteButton svg {
        width: 44%;
    }
    .deleteButton:hover {
        background-color: rgb(237, 56, 56) !important;
    }
    .bin path {
        transition: all 0.2s;
    }
    .deleteButton:hover .bin path {
        fill: #fff;
    }
    .deleteButton:active {
        transform: scale(0.98);
    }
    .tooltip {
        --tooltip-color: rgb(41, 41, 41);
        position: absolute;
        top: -40px;
        background-color: var(--tooltip-color);
        color: white;
        border-radius: 5px;
        font-size: 12px;
        padding: 8px 12px;
        font-weight: 600;
        box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.105);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: all 0.5s;
    }
    .tooltip::before {
        position: absolute;
        width: 10px;
        height: 10px;
        transform: rotate(45deg);
        content: "";
        background-color: var(--tooltip-color);
        bottom: -10%;
    }
    .deleteButton:hover .tooltip {
        opacity: 1;
    }
    
    .container input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0;
    }
    .container {
        display: block;
        position: relative;
        cursor: pointer;
        user-select: none;
        padding: 10px 10px;
        border-radius: 8px;
        transition: all 0.2s;
    }
    .container:hover {
        background-color: #2196F3;
    }
    svg {
        position: relative;
        top: 0;
        left: 0;
        height: 20px;
        width: 20px;
        transition: all 0.3s;
        fill: #666;
    }
    .container:hover #Glyph{
        fill: #fff;
        transform: scale(1.1) rotate(-10deg);
    }
    .container input:checked ~ svg {
        fill: #2196F3;
    }
</style>
</html>