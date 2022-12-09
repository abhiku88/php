<?php
    $server = "localhost";
    $username = "root";
    $password = " ";
    $con = mysqli_connect($server, $usename, $password);

    if(!$con){
        die("connection to this database faild due to" . mysqli_connect_error());
    }
    echo "success connected to the db"






?>