<?php

$name = "Rubem";

function tellName() {

    global $name; //definindo variavel globalmente para acessar dentro da func
    echo $name;
};

tellName()
?>