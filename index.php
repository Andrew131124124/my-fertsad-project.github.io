<?php
$string = 'abcde';

echo $string[0]; 
echo $string[2]; 
echo $string[4];

echo "<br>";

$reversedString = strrev($string);
echo $reversedString; 

echo "<br>";

$num = 2; 

echo $string[$num]; 

echo "<br>";

$lastChar = $string[strlen($string) - 1];
echo $lastChar;

echo "<br>";

$penultimateChar = $string[strlen($string) - 2];
echo $penultimateChar; 

echo "<br>";

$prePenultimateChar = $string[strlen($string) - 3];
echo $prePenultimateChar; 

echo "<br>";

$numberString = '12345'; 
$sum = 0; 

for ($i = 0; $i < strlen($numberString); $i++) {
    $sum += (int)$numberString[$i];
}

echo $sum; 

echo "<br>";

$number = 12345; 
$product = 1;

foreach (str_split((string)$number) as $digit) {
    $product *= (int)$digit;
}

echo $product; 

echo "<br>";

$reversedNumber = strrev((string)$number);
echo $reversedNumber; 

echo "<br>";

$num = 47; 
$num += 7;  
$num -= 18; 
$num *= 10;  
$num /= 15;
echo $num;

echo "<br>";

$str = 'a'; 
$str .= 'b'; 
$str .= 'c'; 

echo $str; 

echo "<br>";

$num = 10; 
$num++;     
$num++;    
$num--;    
echo $num;  

echo "<br>";

$secondsInADay = 24 * 60 * 60; 
echo $secondsInADay;

echo "<br>";

$minutesInADay = 24 * 60; 
echo $minutesInADay;

echo "<br>";

$secondsIn30Days = 30 * $secondsInADay; 
echo $secondsIn30Days; 

echo "<br>";

$secondsInYear = 365 * $secondsInADay; 
echo $secondsInYear; 

echo "<br>";

$minutesInYear = 365 * 24 * 60; 
echo $minutesInYear; 

echo "<br>";

$bytesInMegabyte = 1024 * 1024; 
echo $bytesInMegabyte;

echo "<br>";

$bytesInGigabyte = 1024 * 1024 * 1024;
echo $bytesInGigabyte; 

echo "<br>";

$bytesIn10Gigabytes = 10 * $bytesInGigabyte; 
echo $bytesIn10Gigabytes;

echo "<br>";

$bytesInTerabyte = 1024 * 1024 * 1024 * 1024; 
echo $bytesInTerabyte; 

echo "<br>";

$kilobytesInTerabyte = 1024 * 1024; 
echo $kilobytesInTerabyte; 

echo "<br>";

$r = 5; 
$s = pi() * pow($r, 2);

echo $s; 

echo "<br>";

$a = 4;
$s = pow($a, 2); 
echo $s; 

echo "<br>";

$a = 4; 
$b = 5; 
$s = $a * $b;

echo $s;

echo "<br>";

$a = 4; 
$b = 5; 
$p = 2 * ($a + $b);

echo $p; 

echo "<br>";

$tc = 25; 
$tf = ($tc * 9/5) + 32; 

echo $tf; 

echo "<br>";

$tf = 77; 
$tc = ($tf - 32) * 5/9; 

echo $tc;

echo "<br>";
?>

