<?php
    $servername = "localhost";
    $userserver = "root";
    $passserver = "";
    $dbname = "pubg";

    /*$servername = "localhost";
    $userserver = "vet_web";
    $passserver = "FNc7RfV6PZA3S74S";
    $dbname = "vet_web";*/

    $conn = mysqli_connect($servername, $userserver, $passserver, $dbname);
    if (!$conn){
        die("Connection failed:".$conn->connect_error);
    }
?>