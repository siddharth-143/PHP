<?php
    $a = array("a" => "Red", "b" => "Yellow");
    $b = array("c" => "Blue", "d" => "Yellow");

    var_dump($a === $b);   

    # Output :
        /* bool(false) */

    # Identity (===) :
        /* Returns true if $a and $b have the same key/value pairs in the same order and of the same types */
?>