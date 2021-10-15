<?php

    class Banco extends PDO {

        private $conn;

        public function __construct() {

            $this->conn = new PDO("mysql:host=localhost; dbname=dbphp7", "root", "");

        }
        
        private function setParams($statement, $parameters = array()) {
            foreach ($parameters as $key => $value) {

                $statement->bindParam($key, $value);

            }
        }


        public function query($rawQuery, $params = array()) {

            $stmt = $this->conn->prepare($rawQuery);

        }

    }

?> 