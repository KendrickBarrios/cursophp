<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["usernameDelete"];
    $password = $_POST["passwordDelete"];

    try {
        $pdo = require_once "dbh.inc.php";

        $query = "
        DELETE FROM users
        WHERE username = :username AND pwd = :pwd
        ";

        $stmt = $pdo->prepare($query);

        // assigning named params to values
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":pwd", $password);

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
