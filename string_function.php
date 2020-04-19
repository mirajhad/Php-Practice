<?php



$name = "Miraj";
echo $name;
echo "<br>";

echo "The lenght of my string " . strlen($name);
echo "<br>";

echo str_word_count($name);
echo "<br>";

echo strrev($name);
echo "<br>";

echo strpos($name, "i");
echo "<br>";

echo str_replace("Miraj", "Raj", $name);
echo "<br>";

echo str_repeat($name, 12);
echo "<br>";


echo rtrim("<pre>   Miraj   </pre>");
echo "<br>";

?>
