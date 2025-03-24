<?php
class Database
{
    private static $host = "localhost";
    private static $dbname = "Test1"; // Tên database
    private static $username = "root"; // Username MySQL
    private static $password = ""; // Mật khẩu (nếu có)
    private static $conn = null;

    public static function getConnection()
    {
        if (self::$conn === null) {
            self::$conn = new mysqli(self::$host, self::$username, self::$password, self::$dbname);
            if (self::$conn->connect_error) {
                die("Kết nối thất bại: " . self::$conn->connect_error);
            }
            self::$conn->set_charset("utf8mb4"); // Hỗ trợ tiếng Việt
        }
        return self::$conn;
    }
}
