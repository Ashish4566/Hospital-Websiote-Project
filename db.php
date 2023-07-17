<?php
    $servernam="localhost";
    $username="root";
    $password="";
    $database="Booking";
    $con= mysqli_connect("$servernam","$username","$password","$database");
    if(mysqli_connect_errno())
    {   
        echo "Failed to connect to MYSQL".mysqli_connect_error();
    }   
    else
    {
        echo "Successfully Connected!!";
    }
?>