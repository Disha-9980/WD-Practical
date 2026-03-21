<?php
echo "Write a PHP script to demonstrate encapsulation using private data members and public getter and setter methods.<br>";
echo "Name : Disha Panchal <br>";
echo "Enrollment Number : 24082291082 <br>";
echo "------------------------------------------<br><br>";

class Student {

    private $name;
    private $marks;

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setMarks($marks) {
        if ($marks >= 0 && $marks <= 100) {
            $this->marks = $marks;
        } else {
            echo "Invalid Marks! Please enter between 0 and 100.<br>";
        }
    }

    public function getMarks() {
        return $this->marks;
    }
}

$student1 = new Student();

$student1->setName("Dhrumil");
$student1->setMarks(25);

echo "Student Name: " . $student1->getName() . "<br>";
echo "Student Marks: " . $student1->getMarks();

?>