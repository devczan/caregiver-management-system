<?php
class Database
{
    public $conn;

    public function __construct() {
        $host = getenv('DB_HOST') ?: "localhost";
        $user = getenv('DB_USER') ?: "root";
        $pass = getenv('DB_PASS');
        $pass = $pass === false ? "Thanuvenu" : $pass;
        $dbname = getenv('DB_NAME') ?: "smartcare1";

        $this->conn = new mysqli($host, $user, $pass, $dbname);

        if ($this->conn->connect_error) {
            die("DB Connection failed: " . $this->conn->connect_error);
        }
    }
}
