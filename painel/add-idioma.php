<?php
$titulo_pagina = 'Adicionar Idioma';
$error_idioma = $_GET['error_idioma'] ?? null;
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="public/icons/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/global.css">
    <link rel="stylesheet" href="assets/normalize.css">
    <link rel="stylesheet" href="assets/style.css">
    <script src=./assets/scripts.js></script>
    <title>Vapor - <?= $titulo_pagina ?></title>
</head>

<body onload="removeErrormessage()">
    <div id="cont-dashboard">
        <?php require('./modulos/side-menu.php') ?>
        <div id="sub-dashboard">
            <?php require('./modulos/top-menu.php'); ?>
            <div class="forms">
                <form action="cadastro-idioma.php" method="POST">
                    <div class="info">
                        <label for="novo_idioma">Idioma</label>
                        <input type="text" name="novo_idioma">
                        <?php if ($error_idioma != null) { ?>
                            <div class="error"><?= $error_idioma ?></div>
                        <?php } ?>
                        <button>Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>