<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Programs</title>
</head>
<body>

<?php

// Program 1: Armstrong Number
$num = 351;
function checkArmstrong($num): void {
    $sum = 0;
    $temp = $num;
    while ($temp > 0) {
        $n = $temp % 10;
        $sum += $n * $n * $n;
        $temp = (int)($temp / 10);
    }
    if ($sum == $num) {
        echo "$num is an Armstrong number<br>";
    } else {
        echo "$num is not an Armstrong number<br>";
    }
}
checkArmstrong($num);

// Program 2: Palindrome Number
$num = 212;
function checkPalindrome($num): void {
    $rev = 0;
    $temp = $num;
    while ($temp > 0) {
        $n = $temp % 10;
        $rev = $rev * 10 + $n;
        $temp = (int)($temp / 10);
    }
    if ($rev == $num) {
        echo "$num is a Palindrome number<br>";
    } else {
        echo "$num is not a Palindrome number<br>";
    }
}
checkPalindrome($num);

// Program 3: Prime Number
$num = 7;
function checkPrime($num): void {
    $check = true;
    for ($i = 2; $i <= $num / 2; $i++) {
        if ($num % $i == 0) {
            $check = false;
            break;
        }
    }
    if ($num > 1 && $check) {
        echo "$num is a prime number<br>";
    } else {
        echo "$num is not a prime number<br>";
    }
}
checkPrime($num);

// Program 4: Right-Angled Triangle
$num = 7;
function printRightAngledTriangle($num): void {
    for ($i = 1; $i <= $num; $i++) {
        echo str_repeat('* ', $i) . "<br>";
    }
}
echo "Right-Angled Triangle:<br>";
printRightAngledTriangle($num);

// Program 5: Equilateral Triangle
$num = 7;
function printEquilateralTriangle($num): void {
    for ($i = 1; $i <= $num; $i++) {
        echo str_repeat('&nbsp;&nbsp;&nbsp;', $num - $i);
        echo str_repeat('* ', 2 * $i - 1);
        echo "<br>";
    }
}
echo "<br>Equilateral Triangle:<br>";
printEquilateralTriangle($num);

// Program 6: Fibonacci Series
$num = 7;
function printFibonacciSeries($num): void {
    $t1 = 0;
    $t2 = 1;
    echo "Fibonacci Series:<br>";
    echo "$t1<br>$t2<br>";
    for ($i = 1; $i <= $num; $i++) {
        $t3 = $t1 + $t2;
        echo "$t3<br>";
        $t1 = $t2;
        $t2 = $t3;
    }
}
printFibonacciSeries($num);

// Program 7: Menu Driven Program
$numA = 10;
$numB = 20;
$num = 1;
do {
    echo "1. Sum<br>";
    echo "2. Minus<br>";
    echo "3. Product<br>";
    echo "4. Division<br>";
    echo "5. Exit<br>";
    $choice = $num;
    echo "Enter your choice: $choice<br>";
    $num++;
    switch ($choice) {
        case 1:
            $res = $numA + $numB;
            echo "Sum of $numA and $numB is $res<br>";
            break;
        case 2:
            $res = $numA - $numB;
            echo "Minus of $numA and $numB is $res<br>";
            break;
        case 3:
            $res = $numA * $numB;
            echo "Product of $numA and $numB is $res<br>";
            break;
        case 4:
            $res = $numA / $numB;
            echo "Division of $numA and $numB is $res<br>";
            break;
        case 5:
            exit;
        default:
            echo "Invalid choice<br>";
    }
} while ($choice != 5);

?>
</body>
</html>
