<?php
    function my_fun(){
        static $count = 0;
        $count++;

        print $count;
        print "<br>";
    }

    my_fun();
    my_fun();
    my_fun();

    # static variable :
        /* When a function is completed, all of its variable are normally deleted.
        However, sometimes you want a local variable to not be deleted.

        To de this, use the static keyword when you first declare the variable.
        
        Then each time the function is called, that variable will still have the
        information it caontained from the last time the function was called.
        
        The variable is still local to the funcation.
        */
?>