<?php
    require_once(__DIR__ . "/database.php");
    session_start();
    
    $path = "/todoapp/";
    
    $host = "localhost";
    $username = "root";
    $password = "root";
    $database = "listusers";
    
    if(!isset($_SESSION["connection"])) {
        $connection = new Database($host, $username, $password, $database);
        $_SESSION["connection"] = $connection;
    }
    
    