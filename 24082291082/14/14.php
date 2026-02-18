<?php
echo "Write a PHP script to demonstrate multiple inheritance using traits.<br>";
echo "Name : Disha Panchal <br>";
echo "Enrollment Number : 24082291082 <br>";
echo "------------------------------------------<br><br>";

trait T1 {
    public function method1() {
        echo "Method from Trait - 1<br>";
    }
}

trait T2 {
    public function method2() {
        echo "Method from Trait - 2<br>";
    }
}

class MyClass {
    use T1, T2;
}

$obj = new MyClass();
$obj->method1();
$obj->method2();
?>