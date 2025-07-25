<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice</title>
</head>
<body>
    <?php 
        echo "<h1>Welcome to PHP Practice!</h1>";

        // Variable Declaration
        $name = "Fahima Mim";
        echo "<h1>Hello, my name is $name.</h1>";

        // Best Practice

        // $my_name    Snakecase (variable/function)

        // $myName    Camelcase (Method)

        // $MyName    Titlecase/Pascalcase (Class)

        $name = "Mim";
        echo "<h1>$name</h1>";

        // আমরা যেগুলো ব্যাবহার করতে পারব না সেগুলো হল
        // $123
        // $if

        // Constant বড় হাতে লিখতে হয়
        define("PI", 3.1416);
        echo PI . "<br/>";


        /*
        Data Types
        ======================
            Scalar Types:
            --------------------
                Integar.
                
                    $age = 25;

                Float/Double.

                    $price = 40.43;


                String.

                    $my_name = "Mohammad Rabbi Hossain";


                Boolean.
                    বুলিয়ান সত্য ও মিথ্যা যাচাই করে 

                    $is_user = false;



            Compound Types:
            --------------------
                Array.

                    $fruits =["Mango", "Banana", 25];

                    echo $fruits[0] . "<br/>";



                Object.

                    $user1 = new user();

                    class User {
                        public $name = "John";
                    }
                    $user1 = new User();


            Special Types:
            --------------------
                Null.

                    $variable = NULL;

                Resource

                    $file = fopen("text.txt", "r");

        */

        $age = 25;

        $price = 40.43; // in_int()

        $myName = "Fahima Mim";

        // যদি এখানে false লিখি তাহলে ইউজার না 
        $is_user = false;

        // যদি এখানে true লিখি তাহলে ইউজার
        $is_user = true;


        $fruits = ["Mango", "Banana", 25];
        echo $fruits[0] . "<br/>";

        // $user1 = new user();
        // $variable = NULL;
        // $file = fopen("text.txt", "r");

        echo "is_int($price)" . "<br/>";



        // Arithmetic Operators

        $a = 15;

        $b = 4;

        $addition = $a + $b;

        $subtraction = $a - $b;

        $Multiplication = $a * $b;

        $division = $a / $b;

        $modulus = $a % $b;

        $exponentiation = $a ** $b;

        echo $addition . "<br/>";

        echo $subtraction . "<br/>";

        echo $Multiplication . "<br/>";

        echo $division . "<br/>";

        echo $modulus . "<br/>";

        echo $exponentiation . "<br/>";




        // Assignment Operators

        $a = $a + 2;

        echo "$a <br/>";

        $a += 2;   //$a = $a + 2;  

        echo "$a <br/>"; 

        $a -= 2;   //$a = $a - 2;

        echo "$a <br/>";

        $a *= 2;   //$a = $a * 2; 

        echo "$a <br/>";

        $a /= 2;   //$a = $a / 2;
        
        echo "$a <br/>";

        $a %= 2;   //$a = $a % 2;  
        
        echo "$a <br/>";



















    ?>






</body>
</html>