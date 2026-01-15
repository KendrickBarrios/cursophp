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

    $globalMessage = "Hello";

    echo $globalMessage;
    echo "<br><br>";

    function example() {
        // causes error because global variable is accessible only outside functions
        // $localMessage = $globalMessage . " from inside the function";

        // allows for global variables to be used inside functions
        global $globalMessage;

        // you can also access global variables this way
        // $GLOBALS["globalMessage"];

        $localMessage = $globalMessage . " from inside a function";
        echo $localMessage;
        echo "<br><br>";

        $localVar = 5;
        return $localVar;
    }

    // echo $localVar; causes error because it only exists inside example()
    echo example();
    echo "<br><br>";

    // static variable retain its value between function calls
    function staticCounter() {
        static $number = 5;
        $number++;

        echo $number;
        echo "<br><br>";
    }

    staticCounter();
    staticCounter();

    class ExampleClass {
        public $classVar = "Hello World!";
        private $name = "";

        public function __construct($name) {
            $this->name = $name;
        }
        public function myMethod() {
            echo $this->classVar;
        }

        public function getName() {
            return $this->name;
        }
    }

    $exampleClass = new ExampleClass("Kendrick");


    ?>

</body>

</html>
