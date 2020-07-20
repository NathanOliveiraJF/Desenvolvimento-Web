<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Checkout Mirror Fashion</title>
    <meta name="viewport" content="width=device-width">
</head>
<body>
    <h1>Ótima escolha!</h1>
    <p>Obrigado por comprar na Mirror Fashion! Preencha seus dados para efetivar a compra</p>

    <h2>Sua compra</h2>

    <dl>
        <dt>Cor</dt>
        <dd><?=$_POST['cor'] ?></dd>

        <dt>Tamanho</dt>
        <dd><?=$_POST['tamanho'] ?></dd>

        <dt>Produto</dt>
        <dd><?=$_POST['nome'] ?></dd>

        <dt>Preco</dt>
        <dd>R$ <?=$_POST['preco'] ?></dd>
    </dl>
</body>
</html>