<?php
    require('./modulos/conexao.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];

    $query_cadastro_mensagem = "INSERT INTO mensagem (nome, email, assunto, mensagem, arquivado, visualizado) VALUES('$nome', '$email', '$assunto', '$mensagem', 0, 0)";
    $cadastro_mensagem = mysqli_query($conn, $query_cadastro_mensagem);

    header('location: suporte.php?success=Sua mensagem foi enviada com sucesso, logo nossa equipe entrará em contato!')
?>