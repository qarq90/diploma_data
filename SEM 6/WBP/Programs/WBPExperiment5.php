<?php

// Function for Practical 5: Count the length of a String, find the position of a String, and compare two Strings
function string_operations($string1, $string2)
{
    $length_of_string1 = strlen($string1);
    echo "Length of String 1: $length_of_string1\n";

    $position_of_word = strpos($string1, 'world');
    if ($position_of_word !== false)
    {
        echo "Position of 'world' in String 1: $position_of_word\n";
    }
    else
    {
        echo "'world' not found in String 1\n";
    }

    $comparison_result = strcmp($string1, $string2);
    if ($comparison_result == 0)
    {
        echo "String 1 and String 2 are equal\n";
    }
    elseif ($comparison_result < 0)
    {
        echo "String 1 is less than String 2\n";
    }
    else
    {
        echo "String 1 is greater than String 2\n";
    }
}

// Function for Practical 5: Count the number of words in a String
function count_words($input_string, $return)
{
    $word_count = str_word_count($input_string, $return);

    echo "The string: '$input_string'\n";
    print_r($word_count);
    echo "\n";
}

// Function for Practical 5: Reverse a string
function reverse_string($test_string)
{
    $reversed_string = strrev($test_string);
    echo "Original string: $test_string\nReversed string: $reversed_string\n";
}

// Function for Practical 5: Replace a String with another String and count the number of replacements
function replace_string($original_string, $search_string, $replace_string)
{
    $replaced_string = str_replace($search_string, $replace_string, $original_string, $count);

    echo "Original String: $original_string \n";
    echo "Replaced String: $replaced_string \n";
    echo "Number of Replacements: $count \n";
}

// Function for Practical 5: Convert the String to Uppercase, Lowercase, capitalize the first character of a string
function modify_string($test_string)
{
    echo "Original string: $test_string \n";
    $to_lower = strtolower($test_string);
    echo "String converted to lowercase: $to_lower \n";
    $to_upper = strtoupper($to_lower);
    echo "String converted to UPPERCASE: $to_upper \n";
    $first_character_capitalized = ucwords($test_string);
    echo "String where the first word has been capitalized: $first_character_capitalized\n";
}

// Test data for the functions
$string1 = "Say my name";
$string2 = "No";

$string3 = "Yo mistah white";
$string4 = "PHP is a nalla scripting language";
$string5 = "This   is a message    transmitted from  the source  codenamed     bich";

$test_string = "qarq90";

$original_string = "The quick brown fox jumps over the lazy dog.";
$search_string = "fox";
$replace_string = "donkey";

// Run the functions with the test data
echo "Output for Practical 5: Count the length of a String, find the position of a String, and compare two Strings\n";
echo "String 1: $string1\nString 2: $string2\n";
string_operations($string1, $string2);
echo "\n";

echo "Output for Practical 5: Count the number of words in a String\n";
count_words($string3, 0);
count_words($string4, 1);
count_words($string5, 2);
echo "\n";

echo "Output for Practical 5: Reverse a string\n";
reverse_string($test_string);
echo "\n";

echo "Output for Practical 5: Replace a String with another String and count the number of replacements\n";
replace_string($original_string, $search_string, $replace_string);
echo "\n";

echo "Output for Practical 5: Convert the String to Uppercase, Lowercase, capitalize the first character of a string\n";
modify_string($test_string);

?>
