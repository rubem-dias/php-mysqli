<?php
    // parametros = ip, login, senha, banco
    $conn = new mysqli("localhost", "root", "", "dbphp7");

    if ($conn->connect_error) {
        echo "Error: " . $conn->connect_error;
    }


    $stmt = $conn->prepare("INSERT INTO tb_user (deslogin, dessenha) VALUES(?, ?)"); //preparando para inserir ao banco, o comando é o mesmo que foi feito pelo workbench. na table user, aceitando o parametro das colunas login e senha, apos isso, descrevendo os valores.

    $stmt->bind_param("ss", $login, $password); // aqui no primeiro parametro sao os tipos dos valores dos 2 valores, "s" significa tipo string, logo "ss" para os dois campos, no proximo parametro eh o nome do login, e depois a senha. Aqui ainda nao foi para o banco de dados.
    // No caso do bind param, nao eh possivel atribuir diretamente os valores para o parametro, mas usando variavel como uma especie de ponteiro, referenciando.

    $login = "user";
    $password = "rdsilva";

    $stmt->execute()

    // se eu quiser registrar dois de uma vez, eu apenas defino novos valores para as variaveis e executo o stmt de novo.

?>