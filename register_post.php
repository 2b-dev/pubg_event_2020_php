<?php
    require './configdb.php';
    $re_name = $_POST['rname'];
    $re_gendar = $_POST['rgendar'];
    $re_birth = $_POST['rbirth'];
    $re_job = $_POST['rjob'];
    $re_email = $_POST['remail'];

    $sql_check = "SELECT user_email FROM user WHERE user_email = '".$re_email."'";
    $query_check = mysqli_query($conn, $sql_check) or die(mysqli_error());
    $row = mysqli_num_rows($query_check);
    if($row == 0){
        $sql = "INSERT INTO user (user_id, user_name, user_surname, user_dob, user_email, user_create_time) VALUES (NULL, '$re_name', '$re_gendar', '$re_birth', '$re_job', '$re_email')";
        mysqli_query($conn,"SET NAMES utf8");
        $query = mysqli_query($conn, $sql) or die(mysqli_error());
        if($query === true){
            $_SESSION['username'] = "canAccess";
            echo "success";
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