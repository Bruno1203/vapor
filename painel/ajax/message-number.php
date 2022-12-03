<?php 

require('../modulos/conexao.php');

$query = "SELECT COUNT(id) AS quantidade_mensagens FROM mensagem WHERE arquivado = 0 AND visualizado = 0"; 

$mensagens = mysqli_fetch_assoc(mysqli_query($conn, $query));

echo json_encode($mensagens);
?>