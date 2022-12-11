<?php require('./modulos/autenticacao.php'); require('./modulos/conexao.php');?>

<header id="top">
    <div id="title">
        <p>Vapor - Admin Center</p>
    </div> 
    <div id="clock"></div>
    <div id="user">
        <div class="user-assets">
            <img src="./public/icons/bell-icon.png" alt="notification icon">
            <img src="./public/icons/message-icon.png" alt="message icon" id="message-icon">
            <span id="message-number"></span>
            <div id="message-preview">
            </div>
        </div>
        <div id="user-perfil">
            <img src="./public/icons/login.png" alt="user_photo" id="user-img">
            <p>Olá <?=explode("de", $administrador['nome'])[0]?></p>
            <span>|</span>
            <a href="logout.php" id="logout">Logout</a>
        </div>
    </div>
</header>
<script>
    updateClock()
    updateMessageNumber()
    messagePreviewShow()
</script>

