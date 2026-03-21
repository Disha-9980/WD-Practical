<?php
echo "Write a PHP script to demonstrate inheritance and method overriding in PHP.<br>";
echo "Name : Disha Panchal <br>";
echo "Enrollment Number : 24082291082 <br>";
echo "------------------------------------------<br><br>";

class Guardian {
    public function message() {
        echo "This is Parent Class<br>";
    }
}

class Child extends Guardian {
    public function message() {
        echo "This is Child Class (Overridden Method)<br>";
    }
}

$obj = new Guardian();
$obj->message();
$obj = new Child();
$obj->message();
?>