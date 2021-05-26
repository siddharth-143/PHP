<?php
    $a = array("sidd" => 34, "ven" => 56, "kar" => 37);
    krsort($a);

    foreach($a as $x => $val)
    {
        echo "name : ".$x. ",  age : ".$val;
        echo "<br>";
    }

    # krsort() :
        /* sort associative arrays in ascending order, according to the keys. */
    
    # Output :

    /*
        name : sidd, age : 34
        name : kar, age : 37
        name : ven, age : 56      
     */
?>