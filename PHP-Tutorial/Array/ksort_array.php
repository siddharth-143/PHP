<?php
    $a = array("sidd" => 34, "ven" => 56, "kar" => 37);
    ksort($a);

    foreach($a as $x => $val)
    {
        echo "name : ".$x. ",  age : ".$val;
        echo "<br>";
    }

    # ksort() :
        /* sort associative arrays in ascending order, according to the key */
    
    # Output :

    /*
        name : sidd, age : 34
        name : kar, age : 37
        name : ven, age : 56      
     */
?>