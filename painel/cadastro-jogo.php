<?php 

require('./modulos/conexao.php');

$nome = $_POST['name'] ?? null;
$preco = $_POST['price'] ?? null;
$imagem = $_POST['img_url'] ?? null;
$video = $_POST['vid_url'] ?? null;
$dta_lancamento = $_POST['release_date'] ?? null;
$desenvolvedora = $_POST['developer'] ?? null;
$categoria = $_POST['category'] ?? null;
$descricao = $_POST['description'] ?? null;

$query_jogo_sem_video = "INSERT INTO jogo (nome, valor, descricao, imagem_url, data_lancamento, desenvolvedora, id_categoria) VALUES ('{$nome}', {$preco}, '{$descricao}', '{$imagem}', '{$dta_lancamento}', '{$desenvolvedora}', {$categoria})";

$query_jogo_com_video = "INSERT INTO jogo (nome, valor, descricao, imagem_url, video_url, data_lancamento, desenvolvedora, id_categoria) VALUES ('{$nome}', {$prico}, '{$descricao}', '{$imagem}', '{$video}', '{$dta_lancamento}', '{$desenvolvedora}', {$categoria})";

$consultar_jogo = "SELECT nome FROM jogo WHERE nome = '{$nome}'";
$jogo = mysqli_query($conn, $consultar_jogo);

if ($jogo->num_rows == NULL){  
    if ($video_url == "") {
        mysqli_query($conn, $query_jogo_sem_video);
    } else {
        mysqli_query($conn, $query_jogo_com_video);
    }
    header("location: jogo.php?id=$id_jogo&success_jogo=Jogo cadastrado com sucesso");
}else {
    header("location: add-jogo.php?id=$id_jogo&error_jogo=Jogo já cadastrado");
}

?>