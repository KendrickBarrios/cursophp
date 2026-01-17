<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userSearch = $_POST["userSearch"];

    try {
        $pdo = require_once "includes/dbh.inc.php";

        $query = "
        SELECT c.id, u.username, c.comment_text, c.created_at 
        FROM users AS u
        JOIN comments AS c 
        ON u.id = c.user_id 
        WHERE u.username = :userSearch
        ";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":userSearch", $userSearch);

        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $pdo = null;
        $stmt = null;


    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header("Location: ../index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h3>Search results</h3>

    <?php

    echo "<div>";
    if (empty($results)) {
        echo "<div>";
        echo "<p>No comments have been found</p>";
        echo "</div>";
    } else {
        foreach ($results as $result) {
            echo "<p>" . htmlspecialchars($result["created_at"]) . " - ";
            echo htmlspecialchars($result["username"]) . ": ";
            echo htmlspecialchars($result["comment_text"]);
            echo "</p>";
        }
    }
    echo "</div>";

    ?>

</body>

<style>
</style>

</html>

