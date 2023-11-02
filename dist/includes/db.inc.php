<?php 
    $dbHost = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $dbName = "customers";

    $conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);
    if(!$conn){
        die("Error: ". mysqli_error($conn));
    } else{
        echo "Connected successfully.";
    }