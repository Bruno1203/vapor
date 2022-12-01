<?php 

require('./modulos/conexao.php');

$id_jogo = $_POST['id_jogo'];
$nome = $_POST['name'] ?? null;
$preco = $_POST['price'] ?? null;
$imagem = $_POST['img_url'] ?? null;
$video = $_POST['vid_url'] ?? null;
$dta_lancamento = $_POST['release_date'] ?? null;
$desenvolvedora = $_POST['developer'] ?? null;
$categoria = $_POST['category'] ?? null;
$descricao = $_POST['description'] ?? null;

$consultar_jogo = "SELECT nome FROM jogo WHERE nome = '{$nome}' AND id != {$id_jogo}";
$jogo = mysqli_query($conn, $consultar_jogo);

if ($jogo->num_rows == NULL){    
    if ($video == "" || $video == null) {   
        $query_jogo_sem_video = "UPDATE jogo SET nome = '$nome',  valor = $preco, descricao = '$descricao', imagem_url = '$imagem', data_lancamento = '$dta_lancamento', desenvolvedora = '$desenvolvedora' , id_categoria = $categoria WHERE id = $id_jogo";
        $query_excluindo_video = "UPDATE jogo SET video_url = NULL";
        mysqli_query($conn, $query_excluindo_video);
        mysqli_query($conn, $query_jogo_sem_video);
    } else {
        $query_jogo_com_video = "UPDATE jogo SET nome = '$nome',  valor = $preco, descricao = '$descricao', imagem_url = '$imagem', video_url = '$video', data_lancamento = '$dta_lancamento', desenvolvedora = '$desenvolvedora' , id_categoria = $categoria WHERE id = $id_jogo"; 
        mysqli_query($conn, $query_jogo_com_video);
    }
    header("location: editar-jogo.php?id=$id_jogo&success_jogo=Jogo editado com sucesso");
} else{
    header("location: editar-jogo.php?id=$id_jogo&error_jogo=Jogo já cadastrado");
}

?>