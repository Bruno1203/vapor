<?php 
    require('./modulos/conexao.php');

    $nome_categoria = $_POST['nova_categoria'] ?? null;

    $consultar_categoria = "SELECT nome FROM categoria WHERE nome = '{$nome_categoria}'";

    $cadastrar_categoria = "INSERT INTO categoria (nome) VALUES ('{$nome_categoria}')";

    $categoria = mysqli_fetch_assoc(mysqli_query($conn, $consultar_categoria));

    if ($categoria == null){
        mysqli_query($conn, $cadastrar_categoria);
        header("location: categoria.php");
    } else {
        header("location: add-categoria.php?error_categoria=categoria já cadastrada");
    }
?>