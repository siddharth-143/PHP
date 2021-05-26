<?php
    $a = 12.34;
    $b = 99;

    if(is_float($a)) 
        echo "This is a real/float value.<br>";
    
    else 
        echo "This is not a float/real value.<br>";
    

    if(is_float($b)) 
        echo "This is a float/real value. <br>";
    
    else 
        echo "This is not a float/real value";
    

    # is_float() / is_real() :
    /* The is_real() function is used to find whether a variable is a float or not.
    The is_real() function is depricated from PHP.
    The function is an alias of is_float().
        */
?>