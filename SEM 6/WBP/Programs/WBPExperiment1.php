<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Programs</title>
</head>
<body>
    <?php
        // Program 1: Welcome Message
        echo "<h2>Program 1: Welcome to PHP</h2>";
        echo "<p>Welcome to PHP</p>";

        // Program 2: Static Keyword
        echo "<h2>Program 2: Static Keyword</h2>";
        function playingWithStaticVariables(): int
        {
            static $numR = 10;
            $numR++;
            return $numR;
        }
        echo "numR Value: " . playingWithStaticVariables() . "<br>";
        echo "numR Value: " . playingWithStaticVariables() . "<br>";
        echo "numR Value: " . playingWithStaticVariables() . "<br>";

        // Program 3: Expressions and Operators
        echo "<h2>Program 3: Expressions and Operators</h2>";
        $numA = 15;
        $numB = 3;
        $numC = $numA + $numB;
        echo "Addition of " . $numA . " and " . $numB . " = " . $numC . "<br>";
        $numC = $numA * $numB;
        echo "Product of " . $numA . " and " . $numB . " = " . $numC . "<br>";
        $numC = $numA - $numB;
        echo "Subtraction of " . $numA . " and " . $numB . " = " . $numC . "<br>";
        $numC = $numA / $numB;
        echo "Division of " . $numA . " and " . $numB . " = " . $numC . "<br>";

        // Program 4: Global Keyword
        echo "<h2>Program 4: Global Keyword</h2>";
        $numX = 10;
        function playingWithGlobalVariables(): void
        {
            global $numX;
            echo "The Global variable is now inside the function..." . "<br>";
            $numX = 20;
        }
        echo "Before calling the function, value of global variable was " . $numX . "<br>";
        playingWithGlobalVariables();
        echo "After calling the function, value of global variable is " . $numX . "<br>";

        // Program 5: Global Array
        echo "<h2>Program 5: Global Array</h2>";
        $numX = 10;
        $numY = 35;
        $numZ = 50;
        function playingWithGlobalArray(): void
        {
            echo "The Global Array is now printing the values from within the function:" . "<br><br>";
            echo "GLOBALS_ARRAY[0] : " . $GLOBALS["numX"] . "<br>";
            echo "GLOBALS_ARRAY[1] : " . $GLOBALS["numY"] . "<br>";
            echo "GLOBALS_ARRAY[2] : " . $GLOBALS["numZ"] . "<br>";
        }
        playingWithGlobalArray();
    ?>
</body>
</html>
