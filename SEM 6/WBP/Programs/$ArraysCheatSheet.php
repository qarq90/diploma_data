<?php


print "Indexed array: \n";
$indexed_array = array("Ripper", "Annihilator", "Purifier", "Scythe", "Sparrow");
echo json_encode($indexed_array);
print_r($indexed_array);

echo "\nEvery index is an associative array: \n";

$multi_ass = [
    ["Spectre" => "Ripper"],
    ["Seraph" => "Annihilator"],
    ["Reaper" => "Scythe"],
];

foreach ($multi_ass as $character) {
    foreach ($character as $name => $weapon) {
        echo $name . ": " . $weapon . "\n";
    }
}

echo "\nEvery index is a key: \n";

$multi_key_ass = [
    "Spectre" => ["Ripper", "Active Camo"],
    "Seraph" => ["Annihilator", "Combat Focus"],
    "Reaper" => ["Scythe", "Clones"],
];

foreach ($multi_key_ass as $character => $value) {
    echo $character . " Value: ";
    echo implode(" ", $value);
    echo "\n";
}

$multi_matrix = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9),
);

echo "\n2x2 Matrix Printing: \n";

for ($i = 0; $i < count($multi_matrix); $i++) {
    for ($j = 0; $j < count($multi_matrix[$i]); $j++) {
        echo $multi_matrix[$i][$j] . " ";
    }
    echo "\n";
}

echo "\n";

$my_array = ["Death", "is", "an", "old", "friend"];
$my_string = "Death is an old friend.";

$implode_str = implode(" ", $my_array);
echo $implode_str;

$explode_array = explode(" ", $my_string, -2);
print_r($explode_array);

echo "\n";

function sqrArr_walk($n, $m, $o) : string
{
    echo "$n * $n = " . $n * $n . " ------ $o \n";
}

function sqrArr_map($n) : int
{
    return $n * $n;
}

$arr_iterator = [5, 9, 4, 6];

array_walk($arr_iterator, "sqrArr_walk", "Third Parameter");

echo "\n";

$map_arr = array_map("sqrArr_map", $arr_iterator);

print_r($map_arr);

