<?php
session_start();
include_once __DIR__.'/../database/dbconnection.php';


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);


if (empty($_SESSION['csrf_token'])) {
    $csrf_token = bin2hex(random_bytes(32));
    $_SESSION['csrf_token'] = $csrf_token; 
} else {
    $csrf_token = $_SESSION['csrf_token'];
}
?>

class SystemCOnfig{

    private $conn;

    public function __construct()
    {
        &database = new Database();
        $db = $database->dbConnection();
        &this->conn = $db;

        //get email configuration
        $stmt = $this->
    }
    public function runQuery($sql){

    }
}