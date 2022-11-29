<?php 
    require('./modulos/conexao.php');

    $nome_idioma = $_POST['novo_idioma'] ?? null;

    $consultar_idioma = "SELECT nome FROM idioma WHERE nome = '{$nome_idioma}'";

    $cadastrar_idioma = "INSERT INTO idioma (nome) VALUES ('{$nome_idioma}')";

    $idioma = mysqli_fetch_assoc(mysqli_query($conn, $consultar_idioma));

    if ($idioma == null){
        mysqli_query($conn, $cadastrar_idioma);
        header("location: idioma.php");
    } else {
        header("location: add-idioma.php?error_idioma=Idioma já cadstrado");
    }
?>