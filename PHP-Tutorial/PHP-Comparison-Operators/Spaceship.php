<?php
    $a = 10;
    $b = 20;
    var_dump($a <=> $b);  // Returns -1 because $a is less than $y.
    echo "<br>";

    $a =10;
    $b = 10;
    var_dump($a <=> $b); // Returns 0 because $a is equal to $b.
    echo "<br>";

    $a = 100;
    $b = 20;
    var_dump($a <=> $b);  // Returns 1 because $a is greater than $y.
    echo "<br>";

    # Output :
        /* */

    # Operator <=> :
        /* Spaceship */
?>