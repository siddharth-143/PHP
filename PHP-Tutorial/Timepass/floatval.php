<?php
    $a = "122.00,50";
    $a1 = "122.00";
    $a2 = "122.50";
    $a3 = "122,50";
    $a4 = "122 50";
    $a5 = "0.50";
    $a6 = "0, 50";
    $a7 = "-122.50";
    $a8 = "-122, 50";
    $a9 = "-122 50";

    echo floatval($a)."<br>";
    echo floatval($a1),"<br>";
    echo floatval($a2),"<br>";
    echo floatval($a3),"<br>";
    echo floatval($a4),"<br>";
    echo floatval($a5),"<br>";
    echo floatval($a6),"<br>";
    echo floatval($a7),"<br>";
    echo floatval($a8),"<br>";
    echo floatval($a9),"<br>";
?>