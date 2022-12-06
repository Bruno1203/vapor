<?php
    require('../modulos/conexao.php');

    $query_mensagens = "SELECT id, nome, assunto, visualizado FROM mensagem WHERE arquivado = 0";
    $mensagens_infos = array();
    $mensagens_ids = array();
    $mensagem = mysqli_query($conn, $query_mensagens);

     for($i = 0; $i <= $mensagem->num_rows - 1; $i++){
        $mensagens_infos[$i] =  mysqli_fetch_assoc($mensagem);
    }

    echo json_encode($mensagens_infos);
?>