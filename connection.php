<?php

    $database= new mysqli("localhost","root","Santa@123","hosp");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>
