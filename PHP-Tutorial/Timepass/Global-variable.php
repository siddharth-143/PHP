<?php
    $a = 10;
    $b = 20;

    function sum(){
        global $a, $b, $c;
        $c = $a + $b;
    }

    sum();
    echo $c;


    # global variable :
        /* Global scope refers to any variable that is  define outside of
        any function.

        Global variable can be accessed from any part of the script that is
        not inside a function.

        To access a global variable from within a function, use the global keyword.
        */
?>