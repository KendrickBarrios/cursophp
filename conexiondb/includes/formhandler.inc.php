<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];

    try {
        $pdo = require_once "dbh.inc.php";

        $query = "INSERT INTO users (username, pwd, email) VALUES (?, ?, ?);";

        // named parameters
        // $query = "INSERT INTO users (username, pwd, email) VALUES (:username :pwd, :email);";

        $stmt = $pdo->prepare($query);

        // assigning name params to values
        // $stmt->bindParam(":username", $username);
        // $stmt->bindParam(":pwd", $password);
        // $stmt->bindParam(":email", $email);

        $stmt->execute([$username, $password, $email]);

        // when using named parameters, values are already assigned when executing
        // $stmt->execute();

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