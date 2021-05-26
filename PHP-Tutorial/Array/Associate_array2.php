<?php
    $a = array(1 => "a",
        "1" => "b",
        "c" => "c",
        true => "d");

    var_dump($a);


    # Output :
        /* array(2) { [1]=> string(1) "d" ["c"]=> string(1) "c" } */
?>