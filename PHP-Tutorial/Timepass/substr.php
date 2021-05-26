<?php
    function my_fun($str) {
        $len = strlen($str);
        echo $len,"<br>";
        echo substr($str, 8), "<br>";
        echo substr($str, 2, $len), "<br>";
        echo substr($str, -5, 2), "<br>";
        echo substr($str, -8, -4), "<br>";
    }
    
    $str = "Hello World";
    my_fun($str);

    # substr() :
        /* The substr() is a built-in function in PHP that is used to extract a part of string */
?>