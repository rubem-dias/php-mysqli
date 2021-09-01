<?php

    //iniciando uma sessao

    require_once("config.php");
    
    //Caso eu queira terminar a session

    // session_unset($_SESSION["nome"])

    $_SESSION['nome'] = "Rubem";

    echo session_id()

?>