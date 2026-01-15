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

    // alternative syntax
    // define("PI", 3.14159);
    const PI = 3.14;

    // global constants are accessible inside functions
    function echoConstant() {
        echo PI;
    }

    ?>
</body>

</html>
