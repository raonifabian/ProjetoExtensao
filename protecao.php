<?php

    //arquivo que verifica se o usuaro possui uma sessao valida ativa

    if(!isset($_SESSION)){
        session_start();
    }

    if(!isset($_SESSION['id'])){
        die("Voce não pode acessar essa pagina porque nao tem login. <p><a href=\"login.php\">Entrar</a></p>");
    }

?>

