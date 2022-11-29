<?php 
    require('./modulos/conexao.php');

    $id_categoria = $_GET['id'] ?? null;
    
    $query_identificando_jogos_categoria = "SELECT * FROM jogo WHERE id_categoria = {$id_categoria}";
    $identificando_jogos_categoria = mysqli_query($conn, $query_identificando_jogos_categoria);

    $query_del_jogos = "DELETE FROM jogo WHERE id_categoria = {$id_categoria}";
    $query_del_categoria = "DELETE FROM categoria WHERE id = {$id_categoria}";

    if ($identificando_jogos_categoria->num_rows != 0){;
        while($jogo = mysqli_fetch_array($identificando_jogos_categoria)){
            $query_del_jogos_plataforma = "DELETE FROM jogo_plataforma WHERE id_jogo = {$jogo['id']}";
            $query_del_jogos_idioma = "DELETE FROM jogo_idioma WHERE id_jogo = {$jogo['id']}";
            mysqli_query($conn, $query_del_jogos_plataforma);
            mysqli_query($conn, $query_del_jogos_idioma);
            mysqli_query($conn, $query_del_jogos);
        }
    }else{
        mysqli_query($conn, $query_del_categoria);
        header('location: categoria.php');
    }

    mysqli_query($conn, $query_del_categoria);
    header('location: categoria.php');
?>