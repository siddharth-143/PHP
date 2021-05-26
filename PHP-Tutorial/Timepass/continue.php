<?php
    $a = array(1,2,3,4,5);

    foreach($a as $b)
    {
        if($b == 1)
        continue;

        echo "i = $b <br>";
    }

    # continue statement :
        /* The PHP continue keyword is used to halt the current iteration of a loop
        but it does not terminate the loop.
        
        Just like the break statement the continue statement is situated inside the 
        statement block containing the code that the loop executes, preceded by a conditional
        test.

        For the pass encoutering continue statement, rest of the loop code is skipped
        and next pass start. */
?>