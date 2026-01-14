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

    $bool = true;
    $a = 1;
    $b = 4;

    if ($a < $b && !$bool) {
        echo "Both conditions are true!";
    } else if ($a > $b && $bool) {
        echo "The else if is executed.";
    } else {
        echo "None of the conditions are true!";
    }

    echo "<br>";

    switch ($a) {
        case 1:
            echo "Variable a is equal to 1";
            break;
        default:
            echo "Variable a is not equal to 1";
    }

    echo "<br>";

    $result = match ($a) {
        1, 3, 5 => "Variable a is odd", // any case (1, 3, 5) is true, value is assigned
        2 => "Variable a is equal to 2",
    };

    echo "<br>";
    echo $result;

    ?>

</body>

</html>
