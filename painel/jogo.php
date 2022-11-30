<?php
    $titulo_pagina = 'Jogos';
    $success = $_GET['success_jogo'] ?? null;
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
                    $query_jogos = 'SELECT id, nome FROM jogo';
                    $jogos = mysqli_query($conn, $query_jogos);
                ?>
                <div class="add-button">
                    <a href="./add-jogo.php">Novo jogo</a>
                </div>
                <div class="listas">
                    <?php if($success != null){?>
                        <div class="sucess_cadastro"><?=$success?></div>
                    <?php } ?>
                    <table>
                        <tr>
                            <th>Jogo</th>
                            <th class="actions">idiomas</th>
                            <th class="actions">Plataformas</th>
                            <th class="actions">Editar</th>
                            <th class="actions">Excluir</th>
                        </tr>
                        <?php while($jogo = mysqli_fetch_array($jogos)){?>
                        <tr>
                            <td><?=$jogo['nome']?></td>
                            <td class="actions"><a href="idioma-jogo.php?id=<?=$jogo['id']?>"><img src="./public/icons/idioma-jogo.png" alt="idioma"></a></td>
                            <td class="actions"><a href="plataforma-jogo.php?id=<?=$jogo['id']?>"><img src="./public/icons/plataforma-jogo.png" alt="plataforma"></a></td>
                            <td class="actions"><a href="editar-jogo.php?id=<?=$jogo['id']?>"><img src="./public/icons/editar.png" alt="excluir"></a></td>
                            <td class="actions"><a onclick="excluirJogo(<?=$jogo['id']?>)" href=#><img src="./public/icons/lixeira.png" alt="excluir"></a></td>
                        </tr>
                        <?php } ?>
                    </table> 
                </div>
            </div>
        </div>
    </body>
</html>