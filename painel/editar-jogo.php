<?php 
    $titulo_pagina = 'Adicionar jogo';
    $error_jogo = $_GET['error_jogo'] ?? null;
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
        <script src="./assets/scripts.js"></script>
        <title>Vapor - <?=$titulo_pagina?></title>
    </head>
    <body>
        <div id="cont-dashboard">
            <?php require('./modulos/side-menu.php')?>
            <div id="sub-dashboard">
                <?php require('./modulos/top-menu.php');
                $id_jogo = $_GET['id'];
                $id_categoria = "SELECT * FROM categoria";
                $query_categoria = mysqli_query($conn, $id_categoria);
                $consultar_jogo = "SELECT * FROM jogo WHERE id = '{$id_jogo}'";
                $jogo = mysqli_fetch_assoc(mysqli_query($conn, $consultar_jogo));
                ?>
                <div class="forms">
                    <form action="atualizar-jogo.php" method="POST">
                        <input type="hidden" name="id_jogo" value="<?=$id_jogo?>">
                        <div class="info">
                            <label for="name">Nome</label>
                            <input type="text" name="name" value="<?=$jogo['nome']?>" id="input_prin" onfocus="removeElementoPorId('error')">
                        </div>
                        <div class="info">
                            <label for="price">Valor</label>
                            <input type="number" name="price" value="<?=number_format($jogo['valor'], 2, ",", "")?>">
                        </div>
                        <div class="info">
                            <label for="img_url">Imagem Url</label>
                            <input type="text" name="img_url" value="<?=$jogo['imagem_url']?>">
                        </div>
                        <div class="info">
                            <label for="vid_url">Video Url</label>
                            <input type="text" name="vid_url" value="<?=$jogo['video_url']?>">
                        </div>
                        <div class="info">
                            <label for="release_date">Data de Lançamento</label>
                            <input type="date" name="release_date" value="<?=$jogo['data_lancamento']?>">
                        </div>
                        <div class="info">
                            <label for="developer">Desenvolvedora</label>
                            <input type="text" name="developer" value="<?=$jogo['desenvolvedora']?>">
                        </div>
                        <div class="info">
                            <label for="category">Categoria</label>
                            <select name="category">
                                <option value="" disabled selected>Selecione</option>
                                <?php while($categoria = mysqli_fetch_array($query_categoria)){?>
                                    <?php if($jogo['id_categoria'] == $categoria['id']){?>
                                        <option value="<?=$categoria['id']?>" selected><?=$categoria['nome']?></option>
                                    <?php }else{?>
                                        <option value="<?=$categoria['id']?>"><?=$categoria['nome']?></option>
                                    <?php }?>
                                <?php }?>
                            </select>
                            <button type="submit">Atualizar</button>
                            <?php if($error_jogo != null){?>
                                <div class="error" id="error"><?=$error_jogo?></div>
                            <?php } ?>
                        </div>  
                        <div class="info">
                            <label for="description">Descrição</label>
                            <textarea name="description" cols="30" rows="10"><?=$jogo['descricao']?></textarea>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>