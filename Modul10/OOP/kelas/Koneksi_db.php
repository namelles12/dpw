<?php
class Koneksi_db {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "db_latihan";
    private $con = false;
    private $res = array();
    public function connect($host, $user, $pass, $db) {
        if ($host && $user && $db) {
            $this->con = true; 
            return true; 
        } else {
            $this->con = false;
            return false;   
        }
    }

    public function disconnect() {
        if ($this->con) {
            $this->con = false;
            return true; 
        } else {
            return false; 
        }
    }
}
?>