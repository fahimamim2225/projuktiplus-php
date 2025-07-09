<?php  

$file = fopen("new.txt", "w");
fwrite($file, "Projukti Plus");

$file = fopen("new.txt", "r");
echo fread($file, filesize("new.txt"));
fclose($file);

mkdir("ProjuktiPlus");
rename("new.txt", "anotherFile.txt");


file_put_contents("test.txt", "প্রযুক্তি প্লাস - ");
file_put_contents("test.txt", "যেখানে প্রযুক্তির গল্প হয় বাংলা ভাষায়", FILE_APPEND);
echo file_get_contents("test.txt") . "\n";

file_put_contents("ProjuktiPlus/newFile.txt", "নতুন ফাইল");
echo file_get_contents("ProjuktiPlus/newFile.txt");


// with variable
$fileName = "test.txt";
$fileContent = "প্রযুক্তি প্লাস - ";
file_put_contents($fileName, $fileContent);
$fileContent2 = "যেখানে প্রযুক্তির গল্প হয় বাংলা ভাষায়";
file_put_contents($fileName, $fileContent2, FILE_APPEND);
echo file_get_contents($fileName) . "\n";


// file_put_contents("ProjuktiPlus/newFile.txt", "নতুন ফাইল");
// echo file_get_contents("ProjuktiPlus/newFile.txt");


$myFolder = "Projukti";
if(!is_dir($myFolder)){
    mkdir($myFolder);
}else{
    echo "$myFolder folder already exists";
}


// file_exists();
// is_readable();
// is_writable();


$fileName = "C:/laragon/www/plus-php/class-10/test.txt";

if (file_exists($fileName)){
    echo file_get_contents($fileName);
}else{
    echo "ফাইলটি পাওয়া যায়নি।";
}



?>