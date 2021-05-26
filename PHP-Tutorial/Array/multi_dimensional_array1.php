<?php
    $marks = array(
        "siddhya" => array(
            "physics" => 35,
            "maths" => 45,
            "chemistry" => 56
        ),

        "ventya" => array(
            "physics" => 25,
            "maths" => 65,
            "chemistry" => 76
        ),

        "karanya" => array(
            "physics" => 05,
            "maths" => 43,
            "chemistry" => 33
        )
    );

    echo "Marks of siddhya in physics : ";
    echo $marks["siddhya"]["physics"]."<br>";

    echo "Marks of ventya in maths : ";
    echo $marks["ventya"]["maths"]."<br>";

    echo "Marks of karanya in chemistry : ";
    echo $marks["karanya"]["chemistry"];
?>