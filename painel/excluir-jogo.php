<?php 
    require('./modulos/conexao.php');

    $id_jogo = $_GET['id'] ?? null;
    
    $query_del_jogos = "DELETE FROM jogo WHERE id = {$id_jogo}";
    $query_del_jogos_plataforma = "DELETE FROM jogo_plataforma WHERE id_jogo = {$id_jogo}";
    $query_del_jogos_idioma = "DELETE FROM jogo_idioma WHERE id_jogo = {$id_jogo}";
    mysqli_query($conn, $query_del_jogos_plataforma);
    mysqli_query($conn, $query_del_jogos_idioma);
    mysqli_query($conn, $query_del_jogos);

    header('location: jogo.php');
?>