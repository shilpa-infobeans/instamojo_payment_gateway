<?php
/**
 * Create Database connection with donation table.
 * @package donation-plugin.
 */

namespace IB\DONATION;
use mysqli;
/**
 * Management of the Database Connection.
 */

class DB_Connetion {
    private $host;
    private $username;
    private $password;
    private $database;
    private $conn;

    public function __construct() {
        $this->connect();
    }

    private function connect() {
        $this->host     = 'localhost';
        $this->username = 'root';
        $this->password = '12345';
        $this->database = 'donation_db';
        try {
            $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);
            if ($this->conn->connect_error) {
                die("Connection failed: " . $this->conn->connect_error);
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function getConnection() {
        return $this->conn;
    }

    public function closeConnection() {
        $this->conn->close();
    }
}
