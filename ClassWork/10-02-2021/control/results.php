<?php
    if(empty($_GET['name']))
    {
        echo "Enter a Name";
    }
    echo "Name = ".$_GET['name']."<br>";
    echo "Email = ".$_GET['email']."<br>";
    echo $_SERVER["PHP_SELF"]."<br>";
    echo $_SERVER["REQUEST_URI"]."<br>";
?>