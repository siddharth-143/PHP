<?php
    $num = 153;
    $sum = 0;
    $temp = $num;

    while($temp != 0)
    {
        $rem = $temp % 10;
        $sum = $sum + $rem * $rem * $rem;
        $temp = $temp / 10;
    }

    if($num == $sum)
    {
        echo "Armstrong Number.";
    }

    else {
        echo "Not Armstrong Number.";
    }

    # Output :
        /* Armstrong */
?>