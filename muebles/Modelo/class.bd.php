<?php
    class db{
        private $conn;

        public function __construct(){
            require_once('../../../cred.php');
            $this->conn = new mysqli("localhost", USU_CONN, PSW_CONN, "muebles");
            $this->conn->set_charset("utf8");
        }

        public function __get($var){
            return $this->$var;
        }
    }
?>