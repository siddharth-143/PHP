<?php
    $a = array("c", "d", "a", "b");
    sort($a);
    
    $len = count($a);
    for($i = 0; $i < $len; $i++)
    {
        echo $a[$i]."<br>";
    }

    # sort() :
        /* Sort array in ascending order. */

    # Output :
        /* 
        a
        b
        c
        d */
?>