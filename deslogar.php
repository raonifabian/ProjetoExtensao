<?php 

    //arquivo para deslogar e destruir todas as informações da sessao atual

    if(!isset($_SESSION)){
        session_start();
    }

    session_destroy();

    header("Location: index.html");
?>