<?php
    /* 
    Method 1 : Using readline() function is a built-in function in PHP.
    This function is used to read console input.

    By default, the data type of the variable accepted throught readline()
    function is string. So for any other data type, we have to typecast it
    explicitly as described below.
    */

    # Accept a single input by prompting the user : 

    # for input 
    $a = readline("Enter a string : ");

    // for output 
    echo $a;

    // Output :
    /*
    Enter a string : siddharth
    siddharth
     */

?>