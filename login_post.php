<?php
ob_start();
session_start();
require_once "configdb.php";
$email = $_POST["l_user_email"];
$sql = "SELECT * FROM  user WHERE  user_email = '$email' ";
$query = mysqli_query($conn, $sql) or die(mysqli_error());
if(mysqli_num_rows($query) >= 1){
    //$respon = array("status"=>'success');
    //$_SESSION['username'] = "canAccess";
    //echo json_encode($respon);
    //echo "success";
    $sql_getid = "SELECT user_id FROM user WHERE user_email = '".$email."'";
    mysqli_query($conn,"SET NAMES utf8");
    $resultid = mysqli_query($conn, $sql_getid) or die(mysqli_error());
    if(mysqli_num_rows($resultid) > 0){
        while($rowid = mysqli_fetch_assoc($resultid)) {                   
            $_SESSION['username'] = "canAccess";
            $_SESSION['userid'] = $rowid["user_id"];
            echo "success";                    
        }
    }else{
        echo "error";
    }
}else{
    echo "nodata";
}