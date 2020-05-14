<?php
    ob_start();
    session_start();
    require './configdb.php';
    $user_name = $_POST['user_name'];
    $user_surname = $_POST['user_surname'];
    $user_dob = $_POST['user_dob'];
    $user_email = $_POST['user_email'];
    $user_create_time=date("Y-m-d H:i:s");

    $sql_check = "SELECT user_email FROM user WHERE user_email = '".$user_email."'";
    $query_check = mysqli_query($conn, $sql_check) or die(mysqli_error());
    $row = mysqli_num_rows($query_check);
    if($row == 0){
        $sql = "INSERT INTO user (user_id, user_name, user_surname, user_dob, user_email, user_create_time) VALUES (NULL, '$user_name', '$user_surname', '$user_dob', '$user_email', NOW())";
        mysqli_query($conn,"SET NAMES utf8");
        $query = mysqli_query($conn, $sql) or die(mysqli_error());
        if($query === true){
            $sql_getid = "SELECT user_id FROM user WHERE user_email = '".$user_email."'";
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
            echo "error";
        };
    }else if ($row >= 1){
        echo "havedata";
    }else{
        echo "error";
    }
    mysqli_close($conn);
?>