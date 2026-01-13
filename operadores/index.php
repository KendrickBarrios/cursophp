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
    $a = "Hello";
    $b = "World!";
    $c = $a . " ". $b; // . acts as string concatenator, creating a new string

    echo $c;

    $a = "Goodbye";
    echo "<br><br>";
    echo $c; // c value doesn't change

    // arithmetics
    $age = 25;
    $factor = 3;

    echo "<br><br>Age: " . $age . " Factor: " . $factor;
    echo "<br><br>Sum ";
    echo $age + $factor;
    echo "<br>Substraction ";
    echo $age - $factor;
    echo "<br>Multiplication ";
    echo $age * $factor;
    echo "<br>Division ";
    echo $age / $factor;
    echo "<br>Modulus ";
    echo $age % $factor;
    echo "<br>Power ";
    echo $age ** $factor;
    echo "<br>Shortened operator ";
    $age += $factor; // as well as -=, *=, /=
    echo $age;

    if ($age == $factor) {
        echo "<br>";
        echo $age . " and " . $factor . " are equal.";
    } else if ($age != $factor) {
        echo "<br>";
        echo $age . " and " . $factor . " are not equal.";
    }

    if ($age > $factor) {
        echo "<br>";
        echo $age . " is " . " greater than " . $factor . ".";
    }

    if ($age < $factor || $age != $factor) {
        echo "<br>";
        echo $age . " is either smaller than or not equal to " . $factor . ".";
    }

    echo "<br><br>Increment/Decrement operators<br>";
    echo ++$age; // same as other languages, order matters for these
    echo "<br>";
    echo --$age;
?>
</body>

</html>
