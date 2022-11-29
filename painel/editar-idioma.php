<?php 
    $titulo_pagina = 'Adicionar Idioma';
    $error_idioma = $_GET['error_idioma'] ?? null;
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
                    $id_idioma = $_GET['id'] ?? null;
                    $consultar_idioma = "SELECT nome FROM idioma WHERE id = '{$id_idioma}'";
                    $idioma = mysqli_fetch_assoc(mysqli_query($conn, $consultar_idioma));
                ?>
                <div class="forms">
                    <form action="atualizar-idioma.php" method="POST">
                        <label for="novo_idioma">Idioma</label>
                        <input value="<?=$idioma['nome']?>" type="text" name="idioma">
                        <input value="<?=$id?>" type="hidden" name="id">
                        <?php if($error_idioma != null){?>
                        <div class="error"><?=$error_idioma?></div>
                        <?php } ?>
                        <button>Atualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>