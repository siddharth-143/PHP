<?php

    # Method 2 :
    /* Using fscanf() function works same as the fscanf() function in C.
    We can read 2 integer from keyboard(STDIN) as below. */

    fscanf(STDIN, "%d %d", $a, $b);

    // output
    echo 'The sum of '.$a. " and ".$b. ' : '.($a + $b);

    # Output :
    /* 
        10 20
        The sum of 10 and 20 : 30
    */
?>