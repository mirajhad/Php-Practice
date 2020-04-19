<?php
//Operators in Php
// 1.Arithematic Operators
$a = 45;
$b = 8;
echo "for a + b , the result is " . ($a + $b) . "<br>";
echo "for a - b , the result is " . ($a - $b) . "<br>";
echo "for a / b , the result is " . ($a / $b) . "<br>";
echo "for a % b , the result is " . ($a % $b) . "<br>";


// 2.Assinment Operators
$x = $a;
echo " for x, the value is ".$a . "<br>";
$a = +6;
echo "For x, the value is " . $a . "<br>";

// 3.Compasrion Operators
$x = 7;
$y = 7;
echo " For x == y, the result is ";
echo  var_dump($x == $y) . "<br>";



// 4.Logical Operators
$m = true;
$n = false;
echo "For m and n the result is ";
echo var_dump($m and $n);
echo  "<br>";

echo "For m or n the result is ";
echo var_dump($m or $n);
echo  "<br>";

echo "For !m the result is ";
echo var_dump(!$m);
echo  "<br>";
?>