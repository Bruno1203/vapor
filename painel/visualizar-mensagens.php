<?php
    $id_mensagem = $_GET['id'];
    $titulo_pagina = 'Mensagem';
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
                <?php require('./modulos/top-menu.php');
                    $query_mensagem = "SELECT * FROM mensagem WHERE id = {$id_mensagem}";
                    $resultado_query_mensagem = mysqli_fetch_array(mysqli_query($conn, $query_mensagem));
                    mysqli_query($conn, "UPDATE mensagem SET visualizado = 1 WHERE id = $id_mensagem")
                ?>
                <div id="message-info">
                    <div id="header-message">
                        <div class="user-info"><label for="">Nome: </label><?=$resultado_query_mensagem['nome']?></div>
                        <div class="user-info"><label for="">E-mail: </label><?=$resultado_query_mensagem['email']?></div>
                        <div class="user-info"><label for="">Assunto: </label><?=$resultado_query_mensagem['assunto']?></div>
                    </div>
                    <h2>Mensagem</h2>
                    <div id="message-cont">
                        <label for="">Mensagem:</label>
                        <?=$resultado_query_mensagem['mensagem']?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>