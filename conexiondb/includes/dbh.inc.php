<?php

// using mysqli
//$databaseHost = 'localhost';
//$databaseUsername = 'phpuser';
//$databasePassword = 'password';
//$databaseName = 'myfirstdatabase';

// using PDO
$dsn = "mysql:host=localhost;dbname=myfirstdatabase";
$dbusername = "phpuser";
$dbpassword = "password";

try {
    // $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $pdo;
} catch (PDOException $e) {
    throw new PDOException("Connection failed: " . $e->getMessage());
}