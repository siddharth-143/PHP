<?php
    $a = "hello";
    $b = "world";
    $c = "hello";

    print_r(strcmp($a, $b));
    echo "<br>";
    print_r(strcmp($b, $c));
    echo "<br>";
    print_r(strcmp($a, $c));
    echo "<br>";


    if(strcmp($a, $b) == 0){
        echo "Both string $a and $b are equal";
    }

    if(strcmp($b, $c) == 0){
        echo "Both string $a and $b are equal";
    }

    if(strcmp($a, $c) == 0){
        echo "Both string $a and $b are equal";
    }

    # strcmp() :
        /* The strcmp() is an inbuilt function in php which is used to compare two
        strings.
        This function is case-sensitive which points that capital and small case 
        will treated differntly, during comparison.

        This function compares two strings and tells whether the first string
        is greater or smaller or equals to the second string.
        */
?>