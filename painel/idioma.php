<?php
    $titulo_pagina = 'Dashboard';
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
                    $query_idiomas = 'SELECT id, nome FROM idioma';
                    $idiomas = mysqli_query($conn, $query_idiomas);
                ?>
                <div class="add-button">
                    <a href="./add-idioma.php">Novo Idioma</a>
                </div>
                <div class="listas">
                    <table>
                        <tr>
                            <th>Idioma</th>
                            <th class="actions">Editar</th>
                            <th class="actions">Excluir</th>
                        </tr>
                        <?php while($idioma = mysqli_fetch_array($idiomas)){?>
                        <tr>
                            <td><?=$idioma['nome']?></td>
                            <td class="actions"><a href="editar-idioma.php?id=<?=$idioma['id']?>"><img src="./public/icons/editar.png" alt="excluir"></a></td>
                            <td class="actions"><a href="excluir-idioma.php?id=<?=$idioma['id']?>"><img src="./public/icons/lixeira.png" alt="excluir"></a></td>
                        </tr>
                        <?php } ?>
                    </table> 
                </div>
            </div>
        </div>
    </body>
</html>