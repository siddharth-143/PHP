<?php
    $a = array("sidd" => 34, "ven" => 56, "kar" => 37);
    asort($a);

    foreach($a as $x => $val)
    {
        echo "name : ".$x. ",  age : ".$val;
        echo "<br>";
    }

    # asort() :
        /* sort associative arrays in ascending order, according to the value */
    
    # Output :

    /*
        name : sidd, age : 34
        name : kar, age : 37
        name : ven, age : 56      
     */
?>