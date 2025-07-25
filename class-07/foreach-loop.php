<?php  

    $fruits = ["Mango", "Jackfruit", "Lichi"];
    foreach ( $fruits as $fruit ) {
        // echo $fruit . "\n";
    }


    $person = [
        'name' => 'Rohim',
        'city' => 'Dhaka',
        'Phone' => '01900000000'
    ];
    foreach ( $person as $key => $value ) {
        // echo "$key : $value\n";
    }
    // print_r($person);



    $person = [
        'name' => 'Rohim',
        'city' => 'Dhaka',
        'Phone' => '01900000000'
    ];

    // unset($person['name']);
    // print_r($person);


    $data  = ['Mango', '', null];
    $filtered = array_filter($data);
    // print_r($filtered);


    $user = ['name' => 'Mim', 'email' => 'mim@gmail.com'];
    // extract($user);
    // echo $name;


    $numbers = range(1, 15);
    $sliced = array_slice($numbers, 4, 1);
    // print_r($numbers);
    // print_r($sliced);


    $arr1 = ['Mango', 'Jackfruit'];
    $arr2 = ['Lichi', 'Pineapple'];
    $marged = array_merge($arr1, $arr2);
    // print_r($marged);


    $fruits = ['Mango', 'Jackfruit'];
    if(in_array('Lichi', $fruits)){
        // echo "Found!";
    }else{
        // echo "Not Found!";
    }


    $arr1 = ['Mango', 'Jackfruit'];
    $arr2 = ['Lichi', 'Pineapple'];
    $difference = array_diff($arr1, $arr2);
    // print_r($difference);
    $numbers = range(2, 15, 2);
    print_r($numbers);






?>