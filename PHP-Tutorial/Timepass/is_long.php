<?php
    $a = 12.34;
    $b = 99;

    if(is_long($a)) 
        echo "This is a long value.<br>";
    
    else 
        echo "This is not a long value.<br>";
    

    if(is_long($b)) 
        echo "This is a long value. <br>";
    
    else 
        echo "This is not a long value";
    

    # is_long :
    /* The long() function is used to test whether the type of the specified variable is an integer
    or not. 
    The function is an alias of is_int() and is_integer().
        */
?>