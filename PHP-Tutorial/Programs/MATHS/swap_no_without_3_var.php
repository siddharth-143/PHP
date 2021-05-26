<?php
    $a = 10;
    $b = 20;
    echo "Before swapping : ";
    echo "a = ".$a. "   b = ".$b. "<br><br>";

    $a = $a + $b;
    $b = $a - $b;
    $a = $a - $b;

    echo "After swapping : ";
    echo "a = ".$a. "   b = ".$b;
?>