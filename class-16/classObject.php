/*
OOP = Object Oriented Programming

> ক্লাস কি?

    ক্লাস হচ্ছে একটি কাঠামো , ব্লু প্রিন্ট বা নকশা, যা দিয়ে আমরা আনেকগুলো অবজেক্ট তৈরি করতে পারি ।
    ক্লাসের ভিতরে থাকে প্রোপার্টি (যা ডেটা স্টোর) এবং মেথড (যা কাজ সম্পাদন করে)। 
    বাস্তব জীবনে যেমনঃ প্রোডাক্ট (ক্লাস), আর মোবাইল , ল্যাপটপ , ইত্যাদিকে অব্জেক্ট হিসেবে ধরা হয়। 

> কিভাবে ক্লাস তৈরি করতে হয় ?

    ক্লাস তৈরি করতে class কীওয়ার্ড ব্যবহার করা হয়। 
    ক্লাস এর নামের প্রথম অক্ষর uppercase হবে। 
    ক্লাস এর ভিতরে প্রোপার্টি এবং মেথড define করা হয়। 

    class Product {

    }


> প্রোপার্টি কি? 

    ক্লাসের ভিতরে থাকা ভেরিয়েবল । 
    কোনো অবজেক্টের বৈশিষ্ট্য ধরে রাখে। 
    যেমনঃ প্রোডাক্টের নাম, ব্রান্ড, প্রাইস, ডেসক্রিপশন ইত্যাদি। 

    class Product {
        $name = "Laptop";
    }


> মেথড কি ? 

    ক্লাসের ভিতরে থাকা ফাংশন। 
    অবজেক্টের কর্ম সম্পাদন করে। 

    class Product {
        function productInfo() {

        }
    }


> অ্যাক্সেস মডিফায়ার কয়টি? 

    ১। public: যেকোনো যায়গা থেকে এক্সেসযোগ্য। 
    ২। private: শুধু ক্লাসের ভিতরে এক্সেসযোগ্য। 
    ৩। protected: ক্লাস ও সাব-ক্লাস থেকে এক্সেসযোগ্য। 


> অবজেক্ট কি?

    আমরা চারপাশে যা কিছু দেখতে পাই সব কিছুই অবজেক্ট।
    একটি ক্লাসের নকশা ইউজ করে অনেক অনেক অবজেক্ট তৈরি করা হয়। 
    প্রতিটি অবজেক্ট এর নিজস্ব ভিন্ন ভিন্ন ডাটা থাকে। 
    অবজেক্ট তৈরি করেই আমরা ক্লাসের প্রোপার্টি ও মেথড ব্যবহার করে থাকি। 

> কন্সট্রাক্টর কি? 

    কন্সট্রাক্টর হচ্ছে একটি speacial method, যা অবজেক্ট তৈরি হওয়ার সাথে সাথেই আটোমেটিক কল হয়। 
    এর মূল কাজ হচ্ছে অবজেক্ট তৈরি হওয়ার সময় প্রাথমিক সেট আপ করা বা প্রোপার্টি সেট করে দেওয়া । 
    PHP তে কন্সট্রাক্টর লিখে __construct() এভাবে । 


> কখন অটো কল হয়? 

    যখনি new দিয়ে কোনো ক্লাসের অবজেক্ট তৈরি করা হয়, তখনি কন্সট্রাক্টর অটো কল হয়। 
    আমাদের আলাদা করে ফাংশন কল করার দরকার হয় না । 


> ডেস্ট্রাক্টর কি ? 

    ডেস্ট্রাক্টর হচ্ছে আরেকটি spacial method, যা অবজেক্টের কাজ শেষ হলে বা অবজেক্ট ডিলিট হওয়ার আগে অটোমেটিক কল হয়। 
    মূলত রিসোর্স ফ্রি করা, ফাইল বন্ধ করা বা কাজ শেষ করার জন্য ব্যবহার করা হয়। 
    PHP তে ডেস্ট্রাক্টর লিখতে হয় __destruct() এভাবে। 


> কখন ব্যবহার হয় ? 

    যখন কোনো অবজেক্ট আর দরকার নেই (যেমন স্ক্রিপ্টের একদম শেষে) তখন ডেস্ট্রাক্টর কল হয়। 
    ফাইল, ডাটাবেস কানেকশন বন্ধ করা বা লাস্ট লগ মেসেজ লেখা ইত্যাদিতে ডেস্ট্রাক্টর ব্যবহার করা হয়। 


> this কি? 

    যখন কোনো ক্লাস থেকে অবজেক্ট তৈরি হয়, তখন সেই অবজেক্টটি this হয়ে যায়। 
    this হলো একটি বিশেষ কীওয়ার্ড যা একটি অবজেক্টের ভিতরে থাকা বর্তমান অবজেক্টকেই নির্দেশ করে। 
    অর্থাৎ ->this= এই অবজেক্ট,
    আমরা যখন কোনো মেথড বা কন্সট্রাক্টরের ভিতর থেকে ক্লাসের প্রোপার্টি বা মেথড আক্সেস করতে চাই, তখন this ব্যবহার করি। 

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