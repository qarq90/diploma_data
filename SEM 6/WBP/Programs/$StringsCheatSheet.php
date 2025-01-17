<?php

$my_string = "Death @ is an @ old friend.";

echo "Number of words: " . str_word_count($my_string) . "\n\n";

echo "Format = 1 \n";
$my_arr1 = str_word_count($my_string, 1);
print_r($my_arr1);

echo "\n";

echo "Format = 2 \n";
$my_arr2 = str_word_count($my_string, 2);
print_r($my_arr2);

echo "\n";

echo "Character = @ \n";
$my_arr3 = str_word_count($my_string, 2, "@");
print_r($my_arr3);

echo "\nLength of String: " . strlen($my_string);
echo "\nReversed String: " . strrev($my_string);

echo "\n\n";

echo "Substring 'e' searched after 2-index is at: " . strpos($my_string,"e",2);

echo "\n\n";

$my_str_arr = ["Death", "is", "an", "old", "friend"];

$new_str_Str = str_replace("old","new",$my_string);
echo "Performing on a string: " . $new_str_Str . "\n\n";

$new_str_arr = str_replace("old","new",$my_str_arr,$i);
echo "Performing on an ";
print_r($new_str_arr);

echo "\nTo Upper: " . strtoupper($my_string);
echo "\nTo Lower: " . strtolower($my_string);

echo "\n\nTo Pascal Case: " . ucwords($my_string,"e");

$my_string2 = "Hello World";
echo "\n\nComparing Strings: " . strcmp($my_string,$my_string2);