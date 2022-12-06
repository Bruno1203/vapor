<?php
    $titulo_pagina = 'Mensagens';
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
    <body onload="updateMessagesDados()">
        <div id="cont-dashboard">
            <?php require('./modulos/side-menu.php')?>
            <div id="sub-dashboard">
                <?php require('./modulos/top-menu.php')?>
                <div class="listas espacamento">
                    <table id="dados-message">
                        <tr id="header-messages">
                            <th>Mensagens Recebidas</th>
                            <th class="actions">Assunto</th>
                            <th class="actions">Visualizar</th>
                            <th class="actions">Arquivar</th>
                        </tr>
                    </table>  
                </div>
            </div>
        </div>
    </body>
</html>