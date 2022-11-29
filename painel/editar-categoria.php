<?php 
    $titulo_pagina = 'Adicionar Idioma';
    $error_categoria = $_GET['error_categoria'] ?? null;
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
                    $id_categoria = $_GET['id'] ?? null;
                    $consultar_categoria = "SELECT nome FROM categoria WHERE id = '{$id_categoria}'";
                    $categoria = mysqli_fetch_assoc(mysqli_query($conn, $consultar_categoria));
                ?>
                <div class="forms">
                    <form action="atualizar-categoria.php" method="POST">
                        <label for="categoria">Categoria</label>
                        <input value="<?=$categoria['nome']?>" type="text" name="categoria">
                        <input value="<?=$id?>" type="hidden" name="id">
                        <?php if($error_categoria != null){?>
                        <div class="error"><?=$error_categoria?></div>
                        <?php } ?>
                        <button>Atualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>