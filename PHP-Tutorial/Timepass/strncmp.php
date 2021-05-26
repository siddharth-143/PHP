<?php
    $a = "Wel-come to SW";
    $b = "Wel-come to san world";
    $c = "WEl-come";

    echo strncmp($a, $b, 2)."<br>";
    echo strncmp($b, $c, 5)."<br>";
    echo strncmp($a, $c, 3)."<br>";

    # strncmp() :
        /* The strncmp() is an inbuilt function in PHP which is used to compare first n 
        character of two strings.
        This function is case-sensitive which points that capital and small cases will
        be treated differently, during comparison.
        This function compares two string with first n character and tells whether the
        first string is greater or smaller or equal to the second string.
        */ 
?>