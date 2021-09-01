<?php
    $number = (int)$_GET["a"];
    //variavel number recebendo que, ira converter para inteiro a informação recebida pelo get que é sempre string
    // pela url, no fim do caminho, coloco o ? e depois o parametro, nesse caso http://localhost/variables/exemple-01.php?a=123
    // resumindo, iremos informar variaveis para o servidor.

    var_dump($number)

    //pegando ip do user
    $ip = $_SERVER["REMOTE_ADDR"];
    echo $ip;
?>