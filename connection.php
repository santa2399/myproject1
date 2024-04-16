<?php

    $database= new mysqli("localhost","root","santa","hos");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>
