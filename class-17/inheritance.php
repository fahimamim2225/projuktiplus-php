<?php
class Person {
    public $name;
    public $age;
    protected $email = "admin@projuktiplus.com";

    public function showInfo() {
        echo "Parent Name: $this->name, Age: $this->age, Email: $this->email";
    }
}

class Student extends Person {
    public $roll;

    public function showStudentInfo() {
        echo "Name: $this->name, Age: $this->age, Roll: $this->roll, Email: $this->email";
    }

}

$student1 = new Student();
$student1->name = "Abdur Rahman";
$student1->age = 25;
$student1->roll = 101;
$student1->showInfo();
$student1->showStudentInfo();

// Vehicle -> Car, Bus etc
// Employee -> Manager, Developer, Designer etc
// Animal -> Dog, Cat, Lion etc
// Shape -> Rectangle, Triangle, Polygon etc

class Shape {
    public $color;
    public function showColor() {
        echo "Color: $this->color";
    }
}
class Rectangle extends Shape {
    public $width;
    public $height;

    public function area() {
        return $this->width * $this->height;
    }
}

$r = new Rectangle();
$r->color ="Green";
$r->width = 5;
$r->height = 10;

echo "Area of this Rectangle is: " . $r->area();