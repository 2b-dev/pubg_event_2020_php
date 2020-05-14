<?php
    ob_start();
    session_start();
    require './configdb.php';
    $valuserid = $_POST['valuserid'];    
    $sql = "INSERT INTO view (view_id, view_user_id, view_time) VALUES (NULL, '$valuserid', NOW())";
    mysqli_query($conn,"SET NAMES utf8");
    $query = mysqli_query($conn, $sql) or die(mysqli_error());
    if($query === true){            
        echo "success";  
    }else{
        echo "error";
    };
    mysqli_close($conn);
?>