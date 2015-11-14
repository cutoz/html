<?php
    $file = fopen("readText.txt","r") OR die("Unable to open file");
    echo "Here";
    while(!feof($file))
    {
        echo fgets($file);
    }
    
    fclose($file);
    ?>