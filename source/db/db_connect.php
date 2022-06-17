<?php

    class db_connect
    {
        private $db;
        private $localhost = "127.0.0.1";
        private $user = "root";
        private $db_name = "attendance";
        private $password = "Password##123";
        private $charset = "utf8";

        function __construct(){
            $dsn = "mysql:host=$this->localhost;database=$this->db_name;charset=$this->charset;";
            try {
                $this->db = new PDO($this->user, $this->password, $dsn);
            }catch (PDOException $e){
                echo '<h1 class="text-danger">Failed to connect to Database</h1>';
                throw new PDOException($e->getMessage());
            }
        }

        public function    getDB(){
            return ($this->db);
        }
    }
    $db_obj = new db_connect();
    $db_conn = $db_obj->getDB();
?>