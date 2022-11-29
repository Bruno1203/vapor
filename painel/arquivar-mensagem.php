<?php require('./modulos/conexao.php');
    $id_mensagem = $_GET['id'];
    $query_arquivar = "UPDATE mensagem SET arquivado = 1 WHERE id = {$id_mensagem}";
    mysqli_query($conn, $query_arquivar);
    header('location: mensagens.php')
?>