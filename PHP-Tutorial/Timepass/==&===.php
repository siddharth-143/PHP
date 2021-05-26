<?php
    $a = 345;
    $b = '345';

    if($a === $b)
    {
        echo "Data type and value both are same";
    }
    else
    {
        echo "Data type or value are different";
    }

    # == & === :
        /* The comparison operator called Equal operator is the double equal sign "=="
        This operator accepts two inputs to compare and returns true value if both of 
        the values are same.
        The present equality operator == is different from the assignment operator =.
        It compare only value of variable, not data types and return a false value if both
        of the values are not same. */
?>