<?php

    function greet() {
        echo "Hello, World!";
    }
    greet();

    function add($a, $b) {
        return $a + $b;
    }
    $result = add(25, 10);
    echo "The sum is: " . $result;



    $global = "Global Variable"; // This variable is global and can be accessed anywhere in the script


    function add($a, $b = 5) {
        $local = "Local Variable"; // This variable is local to the function
        return $a + $b;
    }
    $result = add(25);
    echo "The sum is: " . $result;




    $globalVar = "Global Variable"; // This variable is global and can be accessed anywhere in the script

    function testScope() {
        $local = "Local Variable"; // This variable is local to the function

        global $globalVar; // Use the global keyword to access the global variable
        echo $globalVar . "<br>"; 
        echo $local . "<br>"; 
        
    }
    testScope();



    // anonymous function
    $greet = function () {
        echo "Hello, Future Developers!";
    };
    $greet();


    // arrow function
    $add = fn($n1, $n2) => $n1 + $n2;
    echo $add(10, 10);



    // callback function
    function process($callback){
        return $callback("Future Developers!");
    }

    $result = process(function($name) {
        return "Hello, $name!";
    });

    echo $result;


?>