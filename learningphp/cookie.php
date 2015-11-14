<?php
    $cookie_name = "com.srmadt.cooks";
    $cookie_value = "com.srmadt.cooks_value";
    if(!isset($_COOKIE[$cookie_name]))
    {
        echo "Cookie ".$cookie_name." was not set";
        setcookie($cookie_name,$cookie_value,time() + 300,"/");
    }
    else
    {
        echo "Cookie ".$cookie_name." is Set!";
    }
    ?>
    
    
    <HTML>
        Yo.! This is HTML 
        <title> Adding a cookie</title>
        