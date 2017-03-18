<?php
if (!isset($_SESSION)) {
  session_start();
}

//ini_set('display_errors', 0); error_reporting(E_ALL);


class Database{
 
    // specify your own database credentials
    private $host = "localhost";
    private $db_name = "product_loader";
    private $username = "root";
    private $password = "";
    public $conn;
 
    // get the database connection
    public function getConnection(){
 
        $this->conn = null;
 
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
 
        return $this->conn;
    }
}
?>