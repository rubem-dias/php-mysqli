<?php

    class Car {

        private $model;
        // private $engine;
        // private $year;


        // Definindo getter
        public function getModel(){
            return $this->model;
        }

        // Definindo setter
        public function setModel($model) {

            $this->model = $model;

        }

        public function show() {
            return array (
                "modelo"=>$this->getModel()
            );
        }
    }

    $gol = new Car();
    // $gol->model = "Gol GT" -- Ira dar errado, pois esta privada.
    $gol->setModel("Gol GT");
    var_dump($gol->show())
?>