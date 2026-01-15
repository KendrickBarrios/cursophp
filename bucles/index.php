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

    for ($i = 0; $i < 10; $i++) {
        echo "Iteration number: " . ($i + 1) . "<br>";
    }

    echo "<br>";

    $condition = true;
    $counter = 0;

    while ($condition) {
        echo $counter . "<br>";
        $counter++;
        if ($counter == 3) {
            $condition = false;
        }
    }

    /*
     * do {
     * } while ($condition);
     * is also supported
     * */

    echo "<br>";

    $fruits = ["Apple" => "red", "Banana" => "yellow", "Orange" => "orange"];

    foreach ($fruits as $fruit => $color) {
        echo $fruit . " is a " . $color . " fruit<br>";
    }

    ?>

</body>

</html>
