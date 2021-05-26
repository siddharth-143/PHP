<?php
    function my_fun() {

    }

    if(is_callable("my_fun"))
        echo "This is callable function <br>";
    
    else 
        echo "This is not callable function";


    if(is_callable("my_fun1"))
        echo "This is callable function <br>";
    
    else 
        echo "This is not callable function";

    # is_callable() :
    /* The is_callable() function is used to test that the contents of a variable, 
    whether  it can be called as a function or not. */
    
?>