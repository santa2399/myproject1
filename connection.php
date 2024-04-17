<?php

    $database= new mysqli("localhost","root","sangeetha@123","hosp");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>
