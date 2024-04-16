<?php

    $database= new mysqli("localhost","root","Santa@123","hos");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>
