<?php
    $a = 10;
    $b = 34;
    echo "Before swapping : ";
    echo "a = ".$a. "   b = ".$b. "<br><br>";

    $c = $a;
    $a = $b;
    $b = $c;

    echo "After swapping : ";
    echo "a = ".$a. "   b = ".$b;


    # Output :
        /* 
        Before swapping : a = 10 b = 34
        After swapping : a = 34 b = 10
 */
?>