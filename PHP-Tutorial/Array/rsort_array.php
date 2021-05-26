<?php
    $a = array(1, 5, 3, 2, 4);
    rsort($a);
    
    $len = count($a);
    for($i = 0; $i < $len; $i++)
    {
        echo $a[$i]."<br>";
    }

    # rsort() :
        /* Sort array in descending order. */

    # Output :
        /*
        1
        2
        3
        4
        5
         */
?>