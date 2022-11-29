<?php 
    require('./modulos/conexao.php');

    $nome_plataforma = $_POST['nova_plataforma'] ?? null;

    $consultar_plataforma = "SELECT nome FROM plataforma WHERE nome = '{$nome_plataforma}'";

    $cadastrar_plataforma = "INSERT INTO plataforma (nome) VALUES ('{$nome_plataforma}')";

    $plataforma = mysqli_fetch_assoc(mysqli_query($conn, $consultar_plataforma));

    if ($plataforma == null){
        mysqli_query($conn, $cadastrar_plataforma);
        header("location: plataforma.php");
    } else {
        header("location: add-plataforma.php?error_plataforma=plataforma já cadastrada");
    }
?>