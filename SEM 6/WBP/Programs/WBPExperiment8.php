<?php

// Practical No: 8

// 1) Program for Array of Objects
class arr_obj
{
    function __construct($num)
    {
        echo "\nObject number: " . $num;
    }
}

for ($i = 1; $i <= 10; $i++) {
    $obj[$i] = new arr_obj($i);
}

// 2) Program to demonstrate method overloading
class Shape
{
    function __call($name_of_function, $arguments)
    {
        if ($name_of_function == "area") {
            switch ($arguments[0]) {
                case "circle":
                    return 3.14 * $arguments[1];
                case "rect":
                    return $arguments[1] * $arguments[2];
                case "tri":
                    return 0.5 * $arguments[1] * $arguments[2];
            }
        }
        return "Something went wrong...";
    }
}

$s = new Shape;
echo "\nArea of Circle: " . $s->area("circle", 5);
echo "\nArea of rectangle: " . $s->area("rect", 7, 6);
echo "\nArea of triangle: " . $s->area("tri", 12, 8);

// 3) Program to demonstrate method overriding
class ClassParent
{
    public function showMsg()
    {
        echo "I'm from parent class";
    }
}

class ClassChild extends ClassParent
{
    function showMsg()
    {
        echo "I'm from child class coz I'm overriding the parent method";
    }
}
$overriding = new ClassChild();
$overriding->showMsg();

// 4) Program for Single level Inheritance
class CP{
    public function showMsg(){
        echo "I'm from parent class";
    }
}

class CC extends CP{}
$inherit = new CC();
$inherit->showMsg();

// 5) Program to demonstrate multi-level inheritance
abstract class A{
    public string $name;
    public int $age;
    public string $course;
    public static string $gender = "male";
    public function __construct($name, $age, $course) {
        $this->name = $name;
        $this->course = $course;
        $this->age = $age;
        echo self::$gender;
        self::helloWorld();
    }
    public static function helloWorld(): void
    {
        echo "Hello World";
    }
    public abstract function showData(): void;
}
abstract class B extends A{
    public int $roll_no = 51;
}

class C extends B{
    public function showData(): void {
        echo "Name: " . $this->name;
        echo "\nAge: " . $this->age;
        echo "\nCourse: " . $this->course;
        echo "\nRoll NO: " . $this->roll_no;
        echo "\nGender: " . parent::$gender;
        echo "\n";
        parent::helloWorld();
    }
}
$c = new C("Spectre", 18, "CO");
$c->showData();

// 6) Program for Multiple Inheritance. (make use of Trait)
abstract class X{
    public string $name;
    public int $age;
    public string $course;
    public static string $gender = "male";
    public function __construct($name, $age, $course) {
        $this->name = $name;
        $this->course = $course;
        $this->age = $age;
        echo self::$gender;
        self::helloWorld();
    }
    public static function helloWorld(): void{
        echo "Hello World";
    }
    public abstract function showData(): void;
}
trait Y{
    public int $roll_no = 51;
}
class Z extends X{
    use Y;
    public function showData(): void{
        echo "Name: " . $this->name;
        echo "\nAge: " . $this->age;
        echo "\nCourse: " . $this->course;
        echo "\nRoll NO: " . $this->roll_no;
        echo "\nGender: " . parent::$gender;
        echo "\n";
        parent::helloWorld();
    }
}
$c = new Z("Spectre", 18, "CO");
$c->showData();

// 7) Program for Constructor and Destructor.
class new_arr_obj{
    function __construct($num) {
        echo "\nObject number: " . $num . " created";
    }
    function __destruct(){
        echo "\nObject destroyed";
    }
}
for ($i = 1; $i <= 10; $i++) {
    $obj[$i] = new new_arr_obj($i);
}

// 8) Program for abstract class and method
abstract class R {
    public abstract function show();
}
abstract class Q extends R{
    public function show()
    {
        echo "Abstract method of an abstract class";
    }
}
class S extends Q{
    public function show2(){
        $this->show();
    }
}
$q = new S();
$q->show();

// 9) Program for hierarchical inheritance
class Animal
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function eat()
    {
        echo $this->name . " is eating. \n";
    }
}

class Dog extends Animal
{
    public function bark()
    {
        echo $this->name . " is barking. \n";
    }
}

class Cat extends Animal
{
    public function meow()
    {
        echo $this->name . " is meowing. \n";
    }
}

$dog = new Dog("Zeeshu");
$cat = new Cat("Ayyu");

$dog->eat();
$dog->bark();

$cat->eat();
$cat->meow();

// 10) Program for demonstration of final keyword – (class)
final class k
{
    static public function show()
    {
        echo "\nI'm from a Final class , can't be inherited";
    }
}

k::show();

// 11) Program for demonstration of final keyword – (function)
final class l
{
    final static public function show()
    {
        echo "\nI'm from a final method , can't be overridden";
    }
}

l::show();

// 12) Program for demonstration of static keyword – (variables)
function incCount()
{
    static $myCount = 0;
    $myCount++;
    echo $myCount . "\n";
}

incCount();
incCount();
incCount();

// 13) Program for demonstration of static keyword – (properties and methods)
class P
{
    static public $name = "Simon Riley";

    static public function show()
    {
        echo "i m a static method";
    }
}

echo "\n" . P::$name . " is a static property";
echo "\n";
P::show();

?>
