<?php

class db{

    function OpenConn(){
        $serverName = "localhost";
        $userName = "root";
        $password = "";
        $dbName = "test";

        $conn = new mysqli($serverName,$userName,$password,$dbName);
        return $conn;
    }
    
    function CloseConn(){
        $conn->close();
    }
}

?>