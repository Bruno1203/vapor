<?php 
    $titulo_pagina = 'Adicionar Idioma';
    $error_plataforma = $_GET['error_plataforma'] ?? null;
    $id = $_GET['id'];
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
                    $id_plataforma = $_GET['id'] ?? null;
                    $consultar_plataforma = "SELECT nome FROM plataforma WHERE id = '{$id_plataforma}'";
                    $plataforma = mysqli_fetch_assoc(mysqli_query($conn, $consultar_plataforma));
                ?>
                <div class="forms">
                    <form action="atualizar-plataforma.php" method="POST">
                        <div class="info">
                        <label for="plataforma">Plataforma</label>
                        <input value="<?=$plataforma['nome']?>" type="text" name="plataforma">
                        <input value="<?=$id?>" type="hidden" name="id">
                        <?php if($error_plataforma != null){?>
                        <div class="error"><?=$error_plataforma?></div>
                        <?php } ?>
                        <button>Atualizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>