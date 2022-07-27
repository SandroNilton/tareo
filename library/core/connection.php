<?php

    class connection{
        private $conect;

        public function __construct(){
            //$connection = "mysql:host=".DB_HOST.";dbname=".DB_NAME.";.DB_CHARSET.";
            $connection = "sqlsrv:Server=".DB_HOST.",1433;Database=".DB_NAME."";

            try {
                $this->conect = new PDO($connection, DB_USER, DB_PASSWORD);
                $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                //echo 'connection ok';
            } catch (PDOException $e) {
                $this->conect = 'err connection';
                echo 'ERR: '.$e->getMessage();
            }
        }

        public function conect(){
            return $this->conect;
        }
    }

?>
