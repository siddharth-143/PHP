<?php
    $a = "It was nice meeting you. May you shine bright.";
    echo str_replace("you", "him", $a);

    $b = "You eat fruits, vegetables, fiber every day.";
    $c = array("fruits", "vegetables", "fiber");
    $d = array("pizza", "beer", "ice-cream");

    echo "<br>";
    echo str_replace($c, $d, $b);

    # str_replace() function :
        /* The PHP str_repace() function replaces some characters with
        some other characters in a string. */
?>