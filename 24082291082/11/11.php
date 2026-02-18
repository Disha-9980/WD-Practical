<?php
echo "Write a PHP script to demonstrate the concept of class and object in PHP.<br>";
echo "Name : Disha Panchal <br>";
echo "Enrollment Number : 24082291082 <br>";
echo "------------------------------------------<br><br>";

class Student {
    public $name;
    public $age;

    public function display() {
        echo "Name: $this->name Age: $this->age";
    }
}

$s1 = new Student();
$s1->name = "Dhrumil<br>";
$s1->age = 20;
$s1->display();
?>