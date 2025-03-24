<?php
class Database
{
    private static $instance = null;
    private $conn;

    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $dbname = "webbanhang3";

    private function __construct()
    {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
        if ($this->conn->connect_error) {
            die("Lỗi kết nối: " . $this->conn->connect_error);
        }
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public function getConnection()
    {
        return $this->conn;
    }
}
