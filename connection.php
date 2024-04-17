<?php

    $database= new mysqli("hosserver1.mysql.database.azure.com","myserver","sangeetha@123","hosp");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>
