<?php 
    $titulo_pagina = "Game";
    require('./modulos/top-menu.php');
    $id_game = $_GET['id'];

    $query_game = "SELECT * FROM jogo WHERE id = {$id_game}";
    $resultado_game = mysqli_query($conn, $query_game);
    $campos_game = mysqli_fetch_assoc($resultado_game);
    
    if($campos_game != NULL){
        $query_gategoria = "SELECT * FROM categoria WHERE id = {$campos_game['id_categoria']}";
        $resultado_categoria = mysqli_query($conn, $query_gategoria);
        $campo_categoria = mysqli_fetch_assoc($resultado_categoria);

        $query_plataforma = "SELECT nome FROM plataforma INNER JOIN jogo_plataforma ON jogo_plataforma.id_plataforma = plataforma.id WHERE jogo_plataforma.id_jogo = {$campos_game['id']}";
        $resultado_plataforma = mysqli_query($conn, $query_plataforma);

        $query_idioma = "SELECT DISTINCT nome FROM idioma INNER JOIN jogo_idioma ON jogo_idioma.id_idioma = idioma.id WHERE jogo_idioma.id_jogo = {$campos_game['id']}";
        $resultado_idioma = mysqli_query($conn, $query_idioma);
    }
    
    if($campos_game['valor'] != 0){
       $campos_game['valor'] = "R$" . number_format($campos_game['valor'], 2, ',', '');
    } else{
        $campos_game['valor'] = 'Grátis';
    }
?>


<!DOCTYPE html>
<html lang="pt-BR">
    <body>
        <div id="body-container">
            <?php require('./modulos/side-menu.php');?>
            <?php if($campos_game == NULL){ ?>
                <div id="content">
                    <h1 id="game-title">Não Encontramos Esse Titulo em Nossa Base de Dados</h1>
                </div>
            <?php } else { ?>
                <div id="content">
                    <h1 id="game-title"><?=strtoupper($campos_game['nome'])?></h1>
                    <div id="game-data">
                        <div id="photo-container">
                            <img src="<?=$campos_game['imagem_url']?>" alt="<?=$campos_game['nome']?>">
                        </div>
                        <div id="description-container">
                            <h1>Descrição</h1>
                            <div id="text"><?=$campos_game['descricao']?></div>
                            <div class="generic-info">
                                <div class="tag">Data de Lançamento</div>
                                <div class="value"><?=date_format(date_create($campos_game['data_lancamento']), 'd M Y')?></div>
                            </div>
                            <div class="generic-info">
                                <div class="tag">Desenvolvedora</div>
                                <div class="value"><?=$campos_game['desenvolvedora']?></div>
                            </div>
                            <div class="generic-info">
                                <div class="tag">Valor</div>
                                <div class="value"><?=$campos_game['valor']?></div>
                            </div>
                            <div class="generic-info">
                                <div class="tag">Categoria</div>
                                <div class="value"><?=ucfirst(mb_strtolower($campo_categoria['nome']))?></div>
                            </div>
                            <div class="generic-info">
                                <div class="tag">Idiomas</div> 
                                <div class="value"><?php while($campos_idioma = mysqli_fetch_array($resultado_idioma)){
                                        echo $campos_idioma['nome'] . " | ";
                                        }
                                    ?>
                                </div>
                            </div>
                            <div class="generic-info">
                                <div class="tag">Plataformas</div>
                                <div class="value"><?php while($campos_plataforma = mysqli_fetch_array($resultado_plataforma)){
                                        echo $campos_plataforma['nome'] . " | ";
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </body>
</html>