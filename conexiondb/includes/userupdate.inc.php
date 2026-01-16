<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["usernameUpdate"];
    $password = $_POST["passwordUpdate"];
    $email = $_POST["emailUpdate"];

    try {
        $pdo = require_once "dbh.inc.php";

        $query = "
        UPDATE users 
        SET username = :username, pwd = :pwd, email = :email 
        WHERE id = 4;
        ";

        $stmt = $pdo->prepare($query);

        // assigning named params to values
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":pwd", $password);
        $stmt->bindParam(":email", $email);

        // $stmt->execute([$username, $password, $email]);

        // when using named parameters, values are already assigned when executing
        $stmt->execute();

        $pdo = null;
        $stmt = null;

        header("Location: ../index.php");

        die();
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header("Location: ../index.php");
}
