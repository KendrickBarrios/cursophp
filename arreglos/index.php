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
    // array("apple", ...) is an alternative valid syntax
    $fruits = ["apple", "banana", "pineapple"];

    // alternate syntax to add single elements
    // $fruits[] = "mango"

    array_push($fruits, "mango", "lemon");

    foreach ($fruits as $fruit) {
        echo $fruit . " is a fruit!";
        echo "<br>";
    }

    // the two output the same
    echo "<br><br>";
    echo " The last fruit is " . end($fruits);
//    echo "<br><br>";
//    echo " The last fruit is " . $fruits[count($fruits) - 1];

    // unset($fruits[0]);
    array_splice($fruits, 0, 1); // deletes element at 0
    array_splice($fruits, 2, 0, ["kiwi", "lime"]); // insert values at specified position

    echo "<br><br>";
    print_r($fruits);

    $tasks = [
        "Laundry" => "Juan",
        "Trash" => "Luis",
        "Vacuum" => "Roberto",
        "Dishes" => "Jose"
    ];

    // this syntax is forced to push into associative arrays
    $tasks["Dusting"] = "Fernando";

    echo "<br><br>";
    echo $tasks["Laundry"];

    echo "<br><br>";
    print_r($tasks);

    sort($tasks);
    echo "<br><br>";
    print_r($tasks);

    $food = [
        "fruits" => array("apple", "banana"),
        "meat" => array("steak", "fish"),
        "vegetables" => array("carrot", "potato")
    ];

    echo "<br><br>";
    echo $food["fruits"][1];
    ?>

</body>

</html>
