<?php
    $str = "Hello World";
    echo strstr($str, "l");
    echo "<br>";
    echo strstr($str, "l", true);
    echo "<br>";
    echo strstr($str, 101);

    # strstr() :
        /* The strstr() function is a built-in function in PHP.
        
        It searchs for the first occurence of a string inside another
        string and displays the porsition of the latter statring from
        the first occurence of the former in the letter (before if specified).
        */
?>