<?php
    $a = array("1" => "aaa",
            "2" => "bbb",
            "3" => "ccc");

    foreach($a as $b => $c)
    {
        echo "Key = ".$b. " Values = ".$c;
    }

    # Output :
        /* Key = 1 Values = aaaKey = 2 Values = bbbKey = 3 Values = ccc */
?>