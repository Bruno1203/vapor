<?php
    $titulo_pagina = "Admin Panel";
    $error = $_GET['error_message'] ?? null;
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>         
        <meta charset="UTF-8">         
        <meta http-equiv="X-UA-Compatible" content="IE=edge">         
        <meta name="viewport" content="width=device-width, initial-scale=1.0">         
        <link rel="shortcut icon" href="public/icons/favicon.ico" type="image/x-icon">         
        <link rel="stylesheet" href="assets/global.css">         
        <link rel="stylesheet" href="assets/normalize.css">         
        <link rel="stylesheet" href="assets/style.css">  
        <script src=./assets/scripts.js></script>     
        <title>Vapor - <?=$titulo_pagina?></title>     
    </head>
    <body>
        <div id="cont-login">
            <form action="login.php" id=login_screen method="post">
                <img src="public/icons/login.png" alt="login_image" id="img_login">
                <div class="campo_login">
                    <img src="public/icons/email.png" alt="email" class="img_login">
                    <input type="email" placeholder="E-mail" name="email_login" id="email_login" class="input_login" required onfocus="removeElementoPorId('error_message')">
                </div>
                <div class="campo_login">
                    <img src="public/icons/lock.png" alt="lock" class="img_login">
                    <input type="password" name="password_login" class="input_login" placeholder="Password" required>
                </div>
                <button type="submit" id="button_login">Login</button>
                <?php if($error != null){ ?>
                    <label id="error_message"><?=$error?></label>
                <?php } ?>
            </form>
        </div>
    </body>
</html>