<?php

    Class DatabaseConnection{
        private static $instance = null;
        private $dbconn;
        private function __construct(){
        }
        public static function getInstance(){
            if(self::$instance == null){
                self::$instance = new PDO('mysql:dbname=atividade1;localhost', 'root', '');
            }
            return self::$instance;
        }
    }
    $db=DatabaseConnection::getInstance();
    $result = $db->query("select * from teste");
    foreach ($result as $row){
        echo $row["teste1"]. "\n";
    }

?>