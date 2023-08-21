<?php include_once "head.php";
include_once "header.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineMogi - Comprar Ingresso</title>
</head>
<body>

    <main>
    <div>
            <form action="" method="post" class="form-ingressos">
            <h2>Comprar</h2>
            <div class="formas-pagamento">
                <img src="../images/pix.png" alt="logo pix" class="logo-pagamento">
                <img src="../images/visa.png" alt="logo visa" class="logo-pagamento">
                <img src="../images/mastercard.png" alt="logo mastercard" class="logo-pagamento">
                <img src="../images/elo.png" alt="logo elo" class="logo-pagamento">
            </div>
                <div class="div-pagamento">
                    <label for="filmeSelecionado">Selecione o filme</label>
                    <select name="filmeSelecionado" id="filmeSelecionado" class="filmeSelecionado">
                        <option value="guardioes-da-galaxia">Guardiões da Galaxia</option>
                        <option value="velozes-e-furiosos">Velozes e Furiosos</option>
                        <option value="pequena-sereia">Pequena Sereia</option>
                        <option value="homem-aranha">Homem-aranha - Através do aranhaverso</option>
                        <option value="Elementos">Elementos</option>
                        <option value="Mario">Super Mario Bros. O Filme</option>
                    </select>
                </div>
                <hr color="white">
                <div class="div-pagamento">
                    <label for="assentos">Informe os assentos</label>
                    <input type="number" name="assentos" id="assentos" class="input-pagamento" placeholder="Número dos assentos">
                </div>
                <hr color="white">
                <div>
                    <label for="quantidadeIngresso">Quantidade de ingressos</label>
                    <input type="number" name="quantidadeIngresso" id="quantidadeIngresso" class="input-pagamento" placeholder="Informe o número de ingressos">
                </div>
                <hr color="white">
                <a href="../HTML/pagamento.php" class="btn-pagamento">Ir para pagamento</a>
            </form>
        </div>
    </main>

    <section class="assentos">
        <div>
            <img src="../images/assentos.png" alt="assentos" class="img-assentos">
    </div>
    </section>
    
</body>
</html>