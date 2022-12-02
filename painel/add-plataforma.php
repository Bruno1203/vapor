<?php 
    $titulo_pagina = 'Adicionar plataforma';
    $error_plataforma = $_GET['error_plataforma'] ?? null;
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
        <title>Vapor - <?=$titulo_pagina?></title>     
    </head>
    <body>
        <div id="cont-dashboard">
            <?php require('./modulos/side-menu.php')?>
            <div id="sub-dashboard">
                <?php require('./modulos/top-menu.php');?>
                <div class="forms">
                    <form action="cadastro-plataforma.php" method="POST">
                        <div class="info">
                            <label for="nova_plataforma">Plataforma</label>
                            <input type="text" name="nova_plataforma">
                            <button>Salvar</button>
                            <?php if($error_plataforma != null){?>
                            <div class="error" id="error"><?=$error_plataforma?></div>
                            <?php } ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>