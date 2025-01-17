<?php

// Practical No: 6

// 1) Demonstrate pass by value
function passByValue($x, $y)
{
    return $x + $y;
}

echo passByValue(10, 20);


echo "\n";
echo "\n";

// 2) Demonstrate pass by reference
$z = 10;
function passByRef(&$x)
{
    return $x++;
}

echo $z;
passByRef($z);
echo "\n" . $z;

echo "\n";
echo "\n";

// 3) Demonstrate default arguments
function defaultArguments($a, $b = "Money")
{
    echo $a . $b;
}

defaultArguments("Arthur, we need ");
echo "\n";
echo "\n";

// 4) Demonstrate variable functions
function variableFunction($a, $b)
{
    echo $a . $b;
}

$x = "variableFunction";
$x("Arthur, we need ", "money");
echo "\n";
echo "\n";

// 5) Convert the String to Uppercase, Lowercase, capitalize the first character of a string
$test_string = "Death is an old friend";
echo "Original string: " . $test_string . " \n";
$to_lower = strtolower($test_string);
echo "String converted to lowercase: " . $to_lower . " \n";
$to_upper = strtoupper($to_lower);
echo "String converted to UPPERCASE: " . $to_upper . " \n";
$first_character_capitalized = ucwords($test_string);
echo "String where the first word has been capitalized: " . $first_character_capitalized;
echo "\n";
echo "\n";

// 6) Demonstrate anonymous functions in an array
$functionAnonymous = [
    function () {
        echo "\nIndex 0";
    },
    function () {
        echo "\nIndex 1";
    },
    function () {
        echo "\nIndex 2";
    },
];

$x = $functionAnonymous[0];
$y = $functionAnonymous[1];
$z = $functionAnonymous[2];

$x();
$y();
$z();
echo "\n";
echo "\n";

// 7) Demonstrate callback anonymous function
$indexed_array = array("Ripper", "Annihilator", "Purifier", "Scythe", "Sparrow");

array_walk($indexed_array, function ($n) {
    echo $n . "\n";
});
echo "\n";
echo "\n";

// 8) Demonstrate closure in anonymous functions
$a = 10;
$b = 20;
$c = 30;

$functionAnonymous = [
    function () use ($a) {
        echo "\nIndex 0" . $a;
    },
    function () use ($b) {
        echo "\nIndex 1" . $b;
    },
    function () use ($c) {
        echo "\nIndex 2" . $c;
    },
];

$x = $functionAnonymous[0];
$y = $functionAnonymous[1];
$z = $functionAnonymous[2];

$x();
$y();
$z();

?>
