<?php

    // PHP conecta ao banco, pegar uma query.


    // parametros = ip, login, senha, banco
    $conn = new mysqli("localhost", "root", "", "dbphp7");

    if ($conn->connect_error) {
        echo "Error: " . $conn->connect_error;
    }

    $result = $conn->query("SELECT * FROM tb_user ORDER BY deslogin");
    $data = array();

    while ($row = $result->fetch_assoc()) {

            array_push($data, $row);

    }

    echo json_encode($data)
?>