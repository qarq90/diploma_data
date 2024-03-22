<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Programs</title>
</head>
<body>

<?php

// Program 1: Even or Odd
$numK = 15;
function checkEvenOrOdd($num): string
{
    if ($num % 2 == 0) {
        return "Even";
    } else {
        return "Odd";
    }
}

echo "<h2>Program 1: Even or Odd</h2>";
echo "$numK is " . checkEvenOrOdd($numK) . "<br>";

// Program 2: Vowel or Consonant
$numK = "z";
function checkVowelOrConsonant($char): string
{
    switch (strtolower($char)) {
        case "a":
        case "e":
        case "i":
        case "o":
        case "u":
            return "Vowel";
        default:
            return "Consonant";
    }
}

echo "<h2>Program 2: Vowel or Consonant</h2>";
echo "$numK is a " . checkVowelOrConsonant($numK) . "<br>";

// Program 3: Greatest of Three Numbers
$numI = 30;
$numJ = 500;
$numK = 100;
function findGreatest($a, $b, $c): int
{
    if ($a > $b) {
        if ($a > $c) {
            return $a;
        } else {
            return $c;
        }
    } else {
        if ($b > $c) {
            return $b;
        } else {
            return $c;
        }
    }
}

echo "<h2>Program 3: Greatest of Three Numbers</h2>";
echo "The greatest number among $numI, $numJ, and $numK is: " . findGreatest($numI, $numJ, $numK) . "<br>";

// Program 4: Leap Year or Not
$year = 2021;
function checkLeapYear($year): string
{
    if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
        return "Leap Year";
    } else {
        return "Not a Leap Year";
    }
}

echo "<h2>Program 4: Leap Year or Not</h2>";
echo "$year is " . checkLeapYear($year) . "<br>";

// Program 5: Day of the Week
$day = "Thursday";
function getDayOfWeek($day): string
{
    switch ($day) {
        case "Monday":
        case "Tuesday":
        case "Wednesday":
        case "Thursday":
        case "Friday":
        case "Saturday":
        case "Sunday":
            return $day;
        default:
            return "Invalid Day";
    }
}

echo "<h2>Program 5: Day of the Week</h2>";
echo "Day of the week: " . getDayOfWeek($day) . "<br>";

// Program 6: Month of the Year
$monthNumber = 5;
function getMonthOfYear($monthNumber): string
{
    switch ($monthNumber) {
        case 1:
            return "January";
        case 2:
            return "February";
        case 3:
            return "March";
        case 4:
            return "April";
        case 5:
            return "May";
        case 6:
            return "June";
        case 7:
            return "July";
        case 8:
            return "August";
        case 9:
            return "September";
        case 10:
            return "October";
        case 11:
            return "November";
        case 12:
            return "December";
        default:
            return "Invalid Month";
    }
}

echo "<h2>Program 6: Month of the Year</h2>";
echo "Month: " . getMonthOfYear($monthNumber) . "<br>";

// Program 7: Vowel or Consonant using Switch
$vowel = "A";
function checkVowelUsingSwitch($char): string
{
    switch (strtolower($char)) {
        case "a":
        case "e":
        case "i":
        case "o":
        case "u":
            return "Vowel";
        default:
            return "Consonant";
    }
}

echo "<h2>Program 7: Vowel or Consonant using Switch</h2>";
echo "$vowel is a " . checkVowelUsingSwitch($vowel) . "<br>";

?>
</body>
</html>
