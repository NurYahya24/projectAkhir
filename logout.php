<?php
    session_start();
    $_SESSION['login']=false;
    $_SESSION['nama']='';
    $_SESSION['id_user']='';
    unset($_SESSION['login']);
    unset($_SESSION['nama']);
    unset($_SESSION['id_user']);
    session_unset();
    session_destroy();
    header("Location: index.php");


?>