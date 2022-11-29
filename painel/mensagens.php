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
        <title>Vapor - <?=$titulo_pagina?></title>
    </head>
    <body>
        <div id="cont-dashboard">
            <?php require('./modulos/side-menu.php')?>
            <div id="sub-dashboard">
                <?php require('./modulos/top-menu.php');
                    $query_mensagens = "SELECT id, nome, assunto, visualizado FROM mensagem WHERE arquivado = 0";
                    $mensagens = mysqli_query($conn, $query_mensagens);          
                ?>
                <div class="listas espacamento">
                    <table>
                        <tr>
                            <th>Mensagens Recebidas</th>
                            <th class="actions">Assunto</th>
                            <th class="actions">Visualizar</th>
                            <th class="actions">Arquivar</th>
                        </tr>
                        <?php while($mensagem = mysqli_fetch_array($mensagens)){?>
                        <tr>
                            <td <?php if($mensagem['visualizado'] == 0){?> class="nao_visualizado" <?php } ?>><?=$mensagem['nome']?></td>
                            <td class="actions <?php if($mensagem['visualizado'] == 0){?> nao_visualizado <?php } ?>"><?=$mensagem['assunto']?></td>
                            <td class="actions <?php if($mensagem['visualizado'] == 0){?> nao_visualizado <?php } ?>"><a href="visualizar-mensagens.php?id=<?=$mensagem['id']?>">Visualizar</a></td>
                            <td class="actions <?php if($mensagem['visualizado'] == 0){?> nao_visualizado <?php } ?>"><a href="arquivar-mensagem.php?id=<?=$mensagem['id']?>">Arquivar</a></td>
                        </tr>
                        <?php } ?>
                    </table> 
                    <?php if($mensagens->num_rows == 0){ ?>
                        <div id="error-mensage">Não há mensagens a serem exibidas!</div>
                    <?php } ?> 
                </div>
            </div>
        </div>
    </body>
</html>