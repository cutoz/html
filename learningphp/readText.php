<?php
    $file = fopen("readText.txt","r") OR die("Unable to open file");
    while(!feof($file))
    {
        echo fget($file);
    }
    
    fclose($file);
    ?>