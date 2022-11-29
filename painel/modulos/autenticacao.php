<?php
    session_start();
    $administrador = $_SESSION['administrador'] ?? null;

    if($administrador == null) {
        header('location: index.php?error_message=Você deve fazer Login');
    }
?>