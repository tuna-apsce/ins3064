<?php

// include("function.php");
include_once("utilities/function.php");

echo strrev(".dlrow olleH"); // Reverse string
echo str_repeat("Hip ", 2); // Repeat string
echo strtoupper("hooray!"); // String to uppercase
echo("<br>");

echo sum(5,6);


echo("<br>");

$a = 4;
$b = 6;
echo("a = " . $a . "; b = " . "$b");
echo("<br> after swap:");
swap($a, $b);

?>
