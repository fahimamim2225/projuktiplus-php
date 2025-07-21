/*
> Abstract Class কি? 

    একটি খালি খাঁচা 
    যেটিতে কিছু structure থাকে
    সম্পুর্ন Functionality থাকে না
    ডেভেলপার structure মেনে তার মত Functionality যোগ করে
    অবজেক্ট তৈরি করা যায় না 


> Abstract Class কেন? 

    Common Structure/Codebase enforce করা
    ফিউচারে একই Structure এর নতুন ফিচার add করা
    যেমনঃ নতুন পেমেন্ট মেথড add করা
    Code Maintain করা সহজ
    Security এবং Standard বজায় রাখা 


*/




<?php
abstract class PaymentGateway {
    abstract public function pay($amount);
    public function refund(){

    }
}
class PayPal extends PaymentGateway {
    public function pay($amount){
        echo "Paid $$amount via PayPal\n";
    }
    public function makeRefund(){

    }
}
class Stripe extends PaymentGateway {
    public function pay($amount){
        echo "Paid $$amount via Stripe\n";
    }
}

class Bkash extends PaymentGateway {
    public function pay($amount){
        echo "Paid $$amount via Bkash\n";
    }
}

$paypal = new PayPal();
$paypal->pay(100);
$stripe = new Stripe();
$stripe->pay(200);
$bkash = new Bkash();
$bkash->pay(300);

//Pillars of OOP
// Inheritane
// Abstraction
// Encapsulation
// Polymorphism
