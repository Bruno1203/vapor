<?php 
    require('./modulos/conexao.php');

    $nome_idioma = $_POST['idioma'] ?? null;

    $id_idioma = $_POST['id'] ?? null;

    $consultar_idioma = "SELECT nome FROM idioma WHERE nome = '{$nome_idioma}' AND id != {$id_idioma}";

    $atualizar_idioma = "UPDATE idioma SET nome = '{$nome_idioma}' WHERE id = {$id_idioma}";

    $idioma = mysqli_fetch_assoc(mysqli_query($conn, $consultar_idioma));

    if ($idioma == null){
        mysqli_query($conn, $atualizar_idioma);
        header("location: idioma.php");
    } else {
        header("location: editar-idioma.php?id=$id_idioma&error_idioma=Idioma já cadastrado");
    }
?>