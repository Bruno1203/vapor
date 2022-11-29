<?php 
    session_start();
    unset($_SESSION['administrador']);
    header('location: index.php')
?>