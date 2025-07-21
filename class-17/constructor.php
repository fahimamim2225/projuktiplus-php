<?php
class PersonClass {
    public $name;
    public $age;

    public function __construct($studentName, $studentAge) {
        $this->name = $studentName;
        $this->age = $studentAge;
    }

    public function showInfo() {
        echo "Name: $this->name, Age: $this->age";
    }
}

$student1 = new PersonClass("Abdur Rahman", 25);
$student1->showInfo();