<?php 
    $titulo_pagina = 'Adicionar categoria';
    $error_categoria = $_GET['error_categoria'] ?? null;
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
        <title>Vapor - <?=$titulo_pagina?></title>
    </head>
    <body>
        <div id="cont-dashboard">
            <?php require('./modulos/side-menu.php')?>
            <div id="sub-dashboard">
                <?php require('./modulos/top-menu.php');?>
                <div class="forms">
                    <form action="cadastro-categoria.php" method="POST">
                        <div class="info">
                            <label for="nova_categoria">categoria</label>
                            <input type="text" name="nova_categoria">
                            <?php if($error_categoria != null){?>
                            <div id="erro-categoria"><?=$error_categoria?></div>
                            <?php } ?>
                            <button>Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>