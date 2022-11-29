<?php
$query_ultimos_lancamentos = "SELECT id, nome FROM jogo ORDER BY data_lancamento DESC LIMIT 3";
$resultado_ultimos_lancamentos = mysqli_query($conn, $query_ultimos_lancamentos);
$query_categorias = "SELECT id, nome FROM categoria ORDER BY nome";
$resultado_categorias = mysqli_query($conn, $query_categorias);

?>

<div id="side-menu">
    <div class="menu-header">ÚLTIMOS LANÇAMENTOS</div>
    <?php while ($linha_ultimo_lancamento = mysqli_fetch_array($resultado_ultimos_lancamentos)){ ?>
    <?php $linha_ultimo_lancamento['nome'] = ucfirst(mb_strtolower($linha_ultimo_lancamento['nome']))?>
    <div class="item">
        <a title="<?=$linha_ultimo_lancamento['nome']?>" href="game.php?id=<?=$linha_ultimo_lancamento['id']?>"><?=$linha_ultimo_lancamento['nome']?></a>
    </div>
    <?php } ?>

    <div class="menu-header">VER POR CATEGORIA</div>
    <?php while ($linha_categorias = mysqli_fetch_array($resultado_categorias)) { ?>
    <?php $linha_categorias['nome'] = ucfirst(mb_strtolower($linha_categorias['nome']))?>
    <div class="item">
        <a title="<?=$linha_categorias['nome']?>" href="categoria.php?id=<?=$linha_categorias['id']?>"><?=$linha_categorias['nome']?></a>
    </div>
    <?php } ?> 
</div>