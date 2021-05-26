<?php

    // Imagick adaptiveBlurImage() Function
    /*
    The Imagic::adaptiveBlurImage() function is an inbuilt function in PHP which is used
    to add adaptive blur filter in the given image. The intensity of an adaptive blur depends
    is dramatically decreased at the edge of the image. Theis effect makes the image unclear or less
    distinct. 
    
    Syntax :
    bool adaptiveBlurImage($radius, $sigma, $channel)
    */

    // require_once('path/to/vendor/autoload.php'); 
    header('Content-type: image/png');
    
    $image = new Imagick('https://media.geeksforgeeks.org/wp-content/uploads/geeksforgeeks-9.png');
    
    $image->adaptiveBlurImage(20, 5);
    
    echo $image;
?>