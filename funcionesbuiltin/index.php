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

    // string functions
    $message = "Hello world!";

    echo strlen($message);
    echo "<br><br>";
    echo strpos($message, "or");
    echo "<br><br>";
    echo str_replace("world", "Kendrick", $message);
    echo "<br><br>";
    echo strtoupper($message);
    echo "<br><br>";
    echo strtolower($message);
    echo "<br><br>";
    echo substr($message, 6, 6);
    echo "<br><br>";
    echo print_r(explode(" ", $message), true);
    echo "<br><br>";

    // math functions
    $number = -20.5;
    echo abs($number);
    echo "<br><br>";
    echo round($number); // second parameter can be used to specify decimal positions to round to
    echo "<br><br>";
    echo pow($number, 2);
    echo "<br><br>";
    echo sqrt(16);
    echo "<br><br>";
    echo rand(50, 100);
    echo "<br><br>";

    // array functions
    $fruits = ["apple", "banana", "orange"];
    $vegetables = ["carrot", "potato", "lettuce"];

    echo count($fruits);
    echo "<br><br>";
    echo is_array($fruits);
    echo "<br><br>";
    echo implode(", ", $fruits);
    echo "<br><br>";
    // array_push($fruits, "pineapple");
    $fruits[] = "pineapple";
    print_r($fruits);
    echo "<br><br>";
    array_pop($fruits);
    print_r($fruits);
    echo "<br><br>";
    print_r(array_reverse($fruits));
    echo "<br><br>";
    print_r(array_merge($fruits, $vegetables));
    echo "<br><br>";

    // datetime functions
    echo "Current datetime: " . date("Y-m-d H:i:s");
    echo "<br><br>";
    echo time();
    echo "<br><br>";

    $date = "2025-05-06 12:00:00";
    echo strtotime($date);
    echo "<br><br>";

    ?>

</body>

</html>
