<?php

    $fruits = array(
        "Mango", "Jackfruit", "Lichi"
    );

    //echo $fruits[0];
    //var_dump($fruits); 
    //print_r($fruits);

    $number = [10, 20, 30];
    array_push($number, 40);
    array_unshift($number, 5);
    array_pop($number);
    array_shift($number);
    print_r($number);


    $student = [
        'name' => 'Abdur Rahim',
        'age' => 25,
        'department' => 'Mathematics',
    ];

    // print_r($student);
    echo $student['name'];


    $csv = "Mango,Jackfruit,Lichi";
    $fruits = explode(",", $csv);
    $fruitsStr = implode(" - ",$fruits);
    print_r($fruitsStr);


    $student = [
        ['name' => 'Abdur Rahim', 'age' => 25],
        ['name' => 'Abdur Kahim', 'age' => 24],
        ['name' => 'Abdur Kaium', 'age' => 23]
    ];

    //print_r($student);
    //echo $student[1]['name'];


    $data = ['name' => 'Abdur Rahim', 'age' => 25];
    $serialized = serialize($data);
    $json = json_encode($data);
    print_r($json);
    //print_r($serialized);


?>