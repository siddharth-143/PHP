<?php
    $a = array(
        array(1, "aaa", 67),
        array(2, "bbb", 34),
        array(3, 'ccc', 97)
    );

    for($i = 0;$i < 3;$i++)
    {
        for($j = 0;$j < 3;$j++)
        {
            echo $a[$i][$j]."\t";
        }
        echo "<br>";
    }

    # Output ;
        /* 1 aaa 67
        2 bbb 34
        3 ccc 97 */
?>