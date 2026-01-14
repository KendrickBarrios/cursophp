<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <label for="num01">First number</label>
        <input type="number" id="num01" name="num01" required>
        <br>
        <label for="operator">Operation</label>
        <select id="operator" name="operator" required>
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        <br>
        <label for="num02">Second number</label>
        <input type="number" id="num02" name="num02"required>
        <button>Calculate</button>
    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Data collection
        $num01 = filter_input(INPUT_POST, "num01", FILTER_SANITIZE_NUMBER_FLOAT);
        $num02 = filter_input(INPUT_POST, "num02", FILTER_SANITIZE_NUMBER_FLOAT);
        $operator = htmlspecialchars($_POST["operator"]);

        // Error handlers
        $errors = false;

        if (empty($num01) || empty($num02) || empty($operator)) {
            echo "<div class='calc-error'><p>Fill in all fields!</p></div>";
            $errors = true;
        }

        if (!is_numeric($num01) || !is_numeric($num02)) {
            echo "<div class='calc-error'><p>Invalid number!</p></div>";
            $errors = true;
        }

        // Calculator operations
        $result = null;

        if (!$errors) {
            switch ($operator) {
                case "add":
                    $result = $num01 + $num02;
                    break;
                case "subtract":
                    $result = $num01 - $num02;
                    break;
                case "multiply":
                    $result = $num01 * $num02;
                    break;
                case "divide":
                    if ($num02 == 0) {
                        $result = "Cannot divide by zero";
                        break;
                    }
                    $result = $num01 / $num02;
                    break;
                default:
                    $result = "Please enter a valid operator";
                    break;
            }

            echo "<div class='result'><p>Result is $result</p></div>";
        }
    }

    ?>
</body>

<style>
    form {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    label, input, select {
        margin-bottom: 10px;
    }

    select {
        width: 60px;
        height: 40px;
        background: green;
        border-radius: 10px;
        color: white;
        text-align: center;
        font-size: 24px;
    }

    button {
        width: 200px;
        height: 50px;
        background: green;
        border-radius: 25px;
        color: white;
    }

    button:hover {
        background: lawngreen;
        color: black;
    }

    button:active {
        background: lightgreen;
        color: black;
    }

    .result, .calc-error {
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 32px;
        font-weight: bolder;
    }

    .result {
        color: darkgreen;
    }

    .calc-error {
        color: darkred;
    }
</style>

</html>
