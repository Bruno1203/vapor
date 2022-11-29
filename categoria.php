<?php 
    $titulo_pagina = "Categorias";
    require('./modulos/top-menu.php');

    $id_categoria = $_GET['id'];
    $query_lista_jogos = "SELECT id, nome, imagem_url, valor, data_lancamento FROM jogo WHERE id_categoria = {$id_categoria}";
    $resultado_lista_jogos = mysqli_query($conn, $query_lista_jogos);
    $query_categoria = "SELECT nome FROM categoria WHERE id = {$id_categoria}";
    $resultado_categoria = mysqli_fetch_assoc(mysqli_query($conn, $query_categoria));
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <body>
        <div id="body-container">
        <?php require('./modulos/side-menu.php') ?>
            <div id="content">
                <?php if($resultado_lista_jogos->num_rows == 0){?>
                    <div id="header">jogos de <?=ucfirst(mb_strtolower($resultado_categoria['nome']))?></div>
                    <div id="nao_encontrado">Não foi possivel encontrar jogos nessa Categoria</div>
                <?php }else{?>
                <div id="header">jogos de <?=ucfirst(mb_strtolower($resultado_categoria['nome']))?></div>
                <div id="game-list">
                    <?php while($jogos = mysqli_fetch_array($resultado_lista_jogos)) {
                    $contem_jogos = TRUE;
                    if ($jogos['valor'] == 0){
                        $jogos['valor'] = "Gratis";
                    }else{
                        $jogos['valor'] = "R$ " . number_format($jogos['valor'], 2, ',', '');
                    }

                    $query_lista_plataformas = "SELECT nome FROM plataforma INNER JOIN jogo_plataforma ON jogo_plataforma.id_plataforma = plataforma.id WHERE jogo_plataforma.id_jogo = {$jogos['id']}";
                    $resultado_lista_plataforma = mysqli_query($conn, $query_lista_plataformas);

                    $query_lista_idiomas = "SELECT DISTINCT nome FROM idioma INNER JOIN jogo_idioma ON jogo_idioma.id_idioma = idioma.id WHERE jogo_idioma.id_jogo = {$jogos['id']}";
                    $resultado_lista_idiomas = mysqli_query($conn, $query_lista_idiomas);?>
                        <a href="./game.php?id=<?=$jogos['id']?>">
                            <div class="game">
                                <div class="photo">
                                    <img 
                                        src="<?=$jogos['imagem_url']?>" 
                                        alt="<?=$jogos['nome']?> Photo"                                    >
                                </div>
                                    
                                <div class="info">
                                    <div class="title"><?=$jogos['nome']?></div>
                                    <div class="platforms">
                                    <?php while($plafatorma = mysqli_fetch_array($resultado_lista_plataforma)){ ?>
                                        <div class="platform sub-block"><?=$plafatorma['nome']?></div>
                                    <?php } ?>    
                                    </div>
                                    <div class="idioms">
                                    <?php while($idioma = mysqli_fetch_array($resultado_lista_idiomas)) { ?>
                                        <div class="idiom sub-block"><?=$idioma['nome']?></div>
                                    <?php } ?>
                                    </div>
                                    <div class="release-date"><?=date_format(date_create($jogos['data_lancamento']), 'd M Y')?></div>
                                </div>
                                <div class="price"><?=$jogos['valor']?></div>
                            </div>
                        </a>
                    <?php } ?>
                </div>
                <?php } ?>
            </div>
        </div>
    </body>
</html>