<?php 


$name = "Fahima Mim";
echo "I'm $name\n";


$text = <<<EOT
This is
    multiline
        String
EOT;
echo $text;


$sentence = "PHP is Awesome";
echo strlen($sentence) . "\n";
echo str_word_count($sentence) . "\n";
echo strrev($sentence) . "\n";
echo strpos($sentence, "Awesome") . "\n";
echo str_replace("Awesome", "Powerful", $sentence) . "\n";
echo strtolower($sentence) . "\n";
echo strtoupper($sentence) . "\n";


$extraSpace = "  Laravel is very wonderful framework  ";
echo trim($extraSpace) . "\n";
echo substr($extraSpace, 2,9) . "\n";


$str1 = "apple";
$str2 = "Apple";

echo strcmp($str1, $str2) . "\n";
echo strcasecmp($str1, $str2) . "\n";



$password = "secret";
echo md5($password) . "\n";
echo sha1($password) . "\n";


?>