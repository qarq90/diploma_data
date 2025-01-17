<?php

// Introspection

class A
{
    public string $name = 'Spectre';
    public string $age = '19';
    public function getData()
    {
        echo "getData()";
    }

    public function showData()
    {
        echo "showData()";
    }
}

class B extends A
{

}

interface C
{

}

if (class_exists('A')) {
    echo "Class A exists";
} else {
    echo "Class A doesnt exists";
}

echo "\n";

$obj = new B();
echo "Class Name: " . get_class($obj);

echo "\n";

echo "Parent Class: " . get_parent_class($obj);

echo "\n";

if (is_subclass_of($obj, 'A')) {
    echo "Object 'obj' is a subclass of class 'A'.";
} else {
    echo "Object 'obj' is not a subclass of class 'A'.";
}

echo "\n";

$all_classes = get_declared_classes();
print_r($all_classes);

echo "\n";

$my_class_methods = get_class_methods('A');
print_r($my_class_methods);

echo "\n";

$my_class_props = get_class_vars('A');
print_r($my_class_props);

echo "\n";

if (interface_exists('C')){
    echo "Interface C lives on...";
} else {
    echo "Interface C died...";
}

echo "\n";
echo "\n";

if (method_exists($obj, 'showData')) {
    echo "Method 'showData' exists!";
} else {
    echo "Method 'showData' does not exist!";
}

// Serialization

class Game
{
    public string $name;
    public string $char;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->char = $age;
    }
}

$person = new Game("Horizon", "Aloy");

$serialized = serialize($person);

echo "Serialized Object: " . $serialized . "\n\n";

$deserialized = unserialize($serialized);

echo "Deserialized Object: ";
print_r($deserialized);
