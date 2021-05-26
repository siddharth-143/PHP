<?php

    # Accept multiple spaces separated input :
    /* For this, we use another function explode() together with readline()
    The first argument of explode() is the delimiter we want to use.
    In the above example, the delimiter is space. The second argument is the readline()
    function. Here also the data type of $var1 and $var2 will be string.
    So we have to separately typecast them for other datatypes.In the above
    example, the typecasting is shown for integers. */

    // input
    list($var1, $var2) = explode(' ', readline());

    // typecasting to integer
    $var1 = (int)$var1;
    $var2 = (int)$var2;

    // printing the sum of var1 and var2
    echo "The sum of ".$var1. " and ".$var2. " : ".($var1 = $var2);

    // Output :
    /*
        10 20
        The sum of 10 and 20 : 20
    */

?>