<?php
    $book = array(
        array(
            "Name" => "PHP",
            "Price" => "456"
        ),

        array(
            "Name" => "Python",
            "Price" => 986
        ),

        array(
            "Name" => "Java",
            "Price" => 345
        )
    );

    $size = count($book);
    echo $size."<br>";

    for($i = 0;$i < $size;$i++)
    {
        foreach($book[$i] as $key => $value)
        {
            echo $key. " : ". $value. " ";
        }
        echo "<br>";
    }


    # Output :
        /* 3
        Name : PHP Price : 456
        Name : Python Price : 986
        Name : Java Price : 345 */

?>