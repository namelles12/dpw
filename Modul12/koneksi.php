<?php
class Database {
    private $host = "localhost";
    private $user = "root";
    private $paswd = "";
    private $name = "db_praktik";
    public $con;

    public function __construct() {
        $this->con = new mysqli($this->host, $this->user, $this->paswd, $this->name);
        
        if ($this->con->connect_error) {
            die("Koneksi gagal: " . $this->con->connect_error);
        }
        
        $this->con->set_charset("utf8");
    }
}

$db = new Database();
$link = $db->con;