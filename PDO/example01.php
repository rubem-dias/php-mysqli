<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", ""); //primeiro o tipo de banco, nome do banco, e o servidor.

$stmt = $conn->prepare("SELECT * FROM tb_user");

$stmt->execute();

$stmt->fetchAll()


?>