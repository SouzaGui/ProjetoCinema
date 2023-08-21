<?php include_once "head.php";
include_once "header.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineMogi - Pagamento</title>
</head>
<body>

    <main>
        <div>
            <form action="" method="post" class="form-Pagamento">
            <h2>Comprar</h2>
            <div class="formas-pagamento">
                <img src="../images/pix.png" alt="logo pix" class="logo-pagamento">
                <img src="../images/visa.png" alt="logo visa" class="logo-pagamento">
                <img src="../images/mastercard.png" alt="logo mastercard" class="logo-pagamento">
                <img src="../images/elo.png" alt="logo elo" class="logo-pagamento">
            </div>
                <div class="div-pagamento">
                    <label for="nomeCartao">Nome impresso no cartão</label>
                    <input type="text" name="nomeCartao" id="nomeCartao" class="input-pagamento" placeholder="Nome no cartão">
                </div>
                <hr color="white">
                <div class="div-pagamento">
                    <label for="numeroCartao">Número do cartão</label>
                    <input type="number" name="numeroCartao" id="numeroCartao" class="input-pagamento" placeholder="Somente números">
                </div>
                <hr color="white">
                <div>
                    <label for="validadeCartao">Validade</label>
                    <input type="text" name="validadeCartao" id="validadeCartao" class="input-pagamento" placeholder="Validade do Cartão">
                </div>
                <hr color="white">
                <div>
                    <label for="CVV">Digite o CVV / Código de Segurança</label>
                    <input type="text" name="CVV" id="CVV" class="input-pagamento cvv-pagamento" placeholder="CVV">
                </div>
                <hr color="white">
                <button class="btn-pagamento">Comprar Agora</button>
            </form>
        </div>
    </main>
    
</body>
</html>