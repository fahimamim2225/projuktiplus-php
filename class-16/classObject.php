/*
OOP = Object Oriented Programming

> ক্লাস কি?

 ক্লাস হচ্ছে একটি কাঠামো , ব্লু প্রিন্ট বা নকশা, যা দিয়ে আমরা আনেকগুলো অবজেক্ট তৈরি করতে পারি ।
 ক্লাসের ভিতরে থাকে প্রোপার্টি (যা ডেটা স্টোর) এবং মেথড (যা কাজ সম্পাদন করে)। 
 বাস্তব জীবনে যেমনঃ প্রোডাক্ট (ক্লাস), আর মোবাইল , ল্যাপটপ , ইত্যাদিকে অব্জেক্ট হিসেবে ধরা হয়। 

 

*/



<?php 

class Product {
    public $name;
    public $price;
    public $category;
    public $brand;
    public $stock;
    public $sku;

    public function showDetails() {
        // echo "Name: $this->name, Price: $this->price";
    }
}

$product1 = new Product();
$product1->name = "Mobile";
$product1->price = "2000";
$product1->category = "Technology";
$product1->brand = "Walton";
$product1->stock = "40";
$product1->sku = "Tech001";

// echo $product1->name;
// $product1->showDetails();


$product2 = new Product();
$product2->name = "Laptop";
$product2->price = "80000";
$product2->category = "Technology";
$product2->brand = "Walton";
$product2->stock = "20";
$product2->sku = "Tech002";

// echo $product2->name;
// $product2->showDetails();


class Person {
    public $name;
    public $age;
    public $email;
    public $phone;
    public $address;
    public $occupation;

    public function showProfile() {
        echo "Name: $this->name\n, Age: $this->age\n, Email: $this->email\n, Phone Number: $this->phone\n, Current Address: $this->address\n, Occupation: $this->occupation\n ";
    }
}


$person1 = new Person();
$person1->name = "Mamun";
$person1->age = "20";
$person1->email = "mamun@gmail.com";
$person1->phone = "01600000000";
$person1->address = "Khulna";
$person1->occupation = "Developer";

// echo $person1->occupation;
$person1->showProfile();



?>