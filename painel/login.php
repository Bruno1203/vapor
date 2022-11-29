<?php 

require('./modulos/conexao.php');

$email = $_POST['email_login'] ?? null;
$password = $_POST['password_login'] ?? null;

$query_adm = "SELECT nome, id, cpf FROM administrador WHERE email = '{$email}' AND senha = '{$password}'";
$administrador = mysqli_fetch_assoc(mysqli_query($conn, $query_adm));

if($administrador == null){
    header('Location: index.php?error_message=Usuário e/ou senha inválidos');
}else{
    session_start();
    $_SESSION['administrador'] = $administrador;
    header('Location: dashboard.php');
}

?>