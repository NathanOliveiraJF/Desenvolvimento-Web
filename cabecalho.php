<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title><?php print $cabecalho_title; ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <!-- <link rel="stylesheet" href="css/reset.css"> -->
        <link rel="stylesheet" href="css/estilos.css">
        <link rel="stylesheet" href="css/mobile.css" media="(max-width:939)">
        <?php print @$cabecalho_css; ?> 
        <?php print @$reset_css; ?>
        <link href='https://fonts.googleapis.com/css?family=PT+Sans|Bad+Script' rel='stylesheet' type='text/css'>

    </head>
    <body>
        <header class="container">
            <h1><img src="img/logo.png" alt="Logo da Mirror Fashion"></h1>
            <p class="sacola">
                Nenhum item na sacola de compras
            </p>
            <nav class="menu-opcoes">
                <ul>
                    <li><a href="#">Sua Conta</a></li>
                    <li><a href="#">Lista de Desejos</a></li>
                    <li><a href="#">Cartão Fidelidade</a></li>
                    <li><a href="sobre.php">Sobre</a></li>
                    <li><a href="#">Ajuda</a></li>
                </ul>
            </nav>
        </header>
    </body>
</html>