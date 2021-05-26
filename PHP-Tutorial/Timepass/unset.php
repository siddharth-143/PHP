<?php
    $a = "test";
    unset($a);

    var_dump(isset($a));

    # unset() :
        /* The unset() function is an inbuild function in PHP which is used to unset a 
        specified variable. The behavior of this function depends on different things. If the
        function is call from inside of any user-defined function then it unset the values
        associated with the variables inside it, leaving the values which is initialized outside it. */
?>