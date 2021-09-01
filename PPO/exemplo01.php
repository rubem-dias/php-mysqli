<?php

class Person {

    public $name;

    public function falar() {

        return "My name is " . $this->name;

    }
}

$newName = new Person();
$newName->name = "Rubem Dias";
echo $newName->falar();

?>