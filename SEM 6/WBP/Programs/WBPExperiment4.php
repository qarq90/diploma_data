<?php

// Practical No: 4

// 1) Create and display Index array, Associative array and Multidimensional array
echo "Indexed array:" . "<br>";
$qarq90_indexed = ["spectre", "serpah", "sparrow", "battery", "reaper", "firebreak"];
print_r($qarq90_indexed);
echo "<br>";
echo "<br>";

echo "Associative array:" . "<br>";
$qarq90_associative = [
    "agent1" => "spectre",
    "agent2" => "seraph",
    "agent3" => "sparrow",
    "agent4" => "battery",
    "agent5" => "reaper",
    "agent6" => "firebreak"
];
print_r($qarq90_associative);
echo "<br>";
echo "<br>";

echo "Multidimensional array:" . "<br>";
$qarq90_multidimensional = [
    ["agent" => "spectre"],
    ["agent" => "seraph"],
    ["agent" => "sparrow"],
    ["agent" => "battery"],
    ["agent" => "reaper"],
    ["agent" => "firebreak"]
];
print_r($qarq90_multidimensional);
echo "<br>";

// 2) Sort an array in ascending order
echo "Indexed array:" . "<br>";
$qarq90_indexed = [56, 15, 15, 1, 32, 1, 5];

echo "Original Array: " . "<br>";
print_r($qarq90_indexed);

$length = count($qarq90_indexed);

for ($i = 0; $i < $length - 1; $i++) {
    for ($j = 0; $j < $length - $i - 1; $j++) {
        if ($qarq90_indexed[$j] > $qarq90_indexed[$j + 1]) {
            $temp = $qarq90_indexed[$j];
            $qarq90_indexed[$j] = $qarq90_indexed[$j + 1];
            $qarq90_indexed[$j + 1] = $temp;
        }
    }
}

echo "Sorted Array: " . "<br>";
print_r($qarq90_indexed);

// 3) Perform searching in an array
$qarq90_indexed = [56, 15, 15, 1, 32, 1, 5];

$length = count($qarq90_indexed);

for ($i = 0; $i < $length - 1; $i++) {
    echo $qarq90_indexed[$i] . " - ";
}

$search = 32;

for ($i = 0; $i < $length - 1; $i++) {
    if ($qarq90_indexed[$i] == $search) {
        echo "Found 32 at " . $i;
    }
}

// 4) Find minimum and maximum value in an array
$qarq90_indexed = [56, 15, 15, 1, 32, 1, 5];

$length = count($qarq90_indexed);

for ($i = 0; $i < $length - 1; $i++) {
    echo $qarq90_indexed[$i] . " - ";
}

$max = $qarq90_indexed[0];
$min = $qarq90_indexed[0];

for ($i = 0; $i < $length - 1; $i++) {
    if ($qarq90_indexed[$i] > $max) {
        $max = $qarq90_indexed[$i];
    }
    if ($qarq90_indexed[$i] < $min) {
        $min = $qarq90_indexed[$i];
    }
}

echo "\n" . "Largest: " . $max . "\n";
echo "Smallest: " . $min;

// 5) Perform searching in a two dimensional array
$qarq90_indexed = [[56, 15], [1, 32], [1, 5]];

$length = count($qarq90_indexed);

for ($i = 0; $i < $length - 1; $i++) {
    for ($j = 0; $j < $length - 1; $j++) {
        echo $qarq90_indexed[$i][$j] . " - ";

    }
}

$search = 32;

for ($i = 0; $i < $length - 1; $i++) {
    for ($j = 0; $j < $length - 1; $j++) {
        if ($qarq90_indexed[$i][$j] == $search) {
            echo "Found 32 at " . $i . $j;
        }
    }
}

// 6) Find minimum and maximum value in a two dimensional array
$qarq90_indexed = [[56, 15], [1, 32], [21, 500]];

$length = count($qarq90_indexed);

for ($i = 0; $i < $length; $i++) {
    for ($j = 0; $j < $length; $j++) {
        echo $qarq90_indexed[$i][$j] . " - ";
    }
}

$max = $qarq90_indexed[0][0];
$min = $qarq90_indexed[0][0];

for ($i = 0; $i < $length; $i++) {
    for ($j = 0; $j < count($qarq90_indexed[$i]); $j++) {
        if ($qarq90_indexed[$i][$j] > $max) {
            $max = $qarq90_indexed[$i][$j];
        }
        if ($qarq90_indexed[$i][$j] < $min) {
            $min = $qarq90_indexed[$i][$j];
        }
    }
}

echo "\n" . "Largest: " . $max . "\n";
echo "Smallest: " . $min;

// 7) Demonstrate the use of explode() function
$fruitsString = "apple0banana0orange";

$fruitsArray = explode("0", $fruitsString);

print_r($fruitsArray);

// 8) Demonstrate the use of implode() function
$colors = array("red", "green", "blue", "yellow");

$commaSeparated = implode(", ", $colors);

echo $commaSeparated;

// 9) Demonstrate the use of array_flip() function
$originalArray = array("one" => 1, "two" => 2, "three" => 3);

$flippedArray = array_flip($originalArray);

print_r($flippedArray);

// 10) Demonstrate the use of array_walk() function
$arr_og = [514, 56, 15, 15, 1, 5];
function sqr(&$n)
{
    return $n * $n;
}

array_walk($arr_og, "sqr");
print_r($arr_og);

//11) Write a PHP script to demonstrate the use of array_map() function
$arr_og = [514, 56, 15, 15, 1, 5];
function sqrA($n)
{
    return $n * $n;
}

$arr_og2 = array_map("sqrA", $arr_og);

print_r($arr_og2);

