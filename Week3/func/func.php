<?php 
function sum($a, $b) {
    return $a + $b;
} 

function swap($a, $b) {
    $stemp = $a;
    $a = $b;
    $b = $stemp;

    echo("<br>After swap <br>");
    echo ("Number a is " . $a);
    echo("<br>");
    echo ("Number b is " . $b);
}
?>