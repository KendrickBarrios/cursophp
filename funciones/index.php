<?php
declare(strict_types=1);
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
    <?php

    function sum($a, $b) {
        return $a + $b;
    }

    echo sum(3,4);
    echo "<br><br>";

    $result = sum(9,84);
    echo $result;
    echo "<br><br>";

    function sayHello(string $name = "Kendrick"): string {
        return "Hello " . $name . "!";
    }

    // sayHello(20) causes error because of strict types
    echo sayHello();

    ?>
</body>

</html>
