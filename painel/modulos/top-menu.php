<?php require('./modulos/autenticacao.php'); require('./modulos/conexao.php');?>

<script src="./js/jquery.js"></script>
<script src="./js/scripts.js"></script>
<header id="top">
    <div id="title">
        <p>Vapor - Admin Center</p>
    </div> 
    <div id="user">
        <div class="user-assets">
            <img src="./public/icons/bell-icon.png" alt="notification icon">
        </div>
        <div class="user-assets">
            <a href="mensagens.php"><img src="./public/icons/message-icon.png" alt="message icon"></a>
        </div>
        <img src="./public/icons/login.png" alt="user_photo" id="login-user">
        <p>Olá, <?=explode("de", $administrador['nome'])[0]?></p>
        <span>|</span>
        <a href="logout.php" id="logout">Logout</a>
    </div>
</header>


