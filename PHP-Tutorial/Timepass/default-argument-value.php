<?php
    // Will use the default value 
    function fun_name($a = 100)
    {
        echo "value : $a <br>";
    }

    fun_name(10);
    fun_name();

    # Default argument values :
        /* If we call the function fun_name() without arguments it takes the default
        value as argument. */  
?>