<?php 
    require('./modulos/conexao.php');

    $id_idioma = $_GET['id'] ?? null;

    $query_jogo_idioma = "DELETE FROM jogo_idioma WHERE id_idioma = {$id_idioma}";

    $query_idiomas = "DELETE FROM idioma WHERE id = {$id_idioma}";

    mysqli_query($conn, $query_jogo_idioma);
    mysqli_query($conn, $query_idiomas);

    header('location: idioma.php')
?>