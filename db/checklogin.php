<?php
    session_start();
    $_SESSION['flag'] = 0;
    require_once("connect.php");
    $user = $_POST['username'];
    $pass = $_POST['pass'];
    if(isset($user) & isset($pass)){
        $qury = "select id from user where username='".$user."' and password_hash='".$pass."' and status=1";
        $result = mysqli_query($conn,$qury);
        $row = mysqli_fetch_assoc($result);
        if($row){
        if(isset($row['id'])){
            $_SESSION['flag'] = 1;
            $_SESSION['unique_user_id'] = $row['unique_user_id'];
            $_SESSION['status'] = 1;
            header("Location:../admin.php");
            exit;
        }
    }
    else{
        $qury1 = "select * from bnoisesResult where unique_user_id='".$user."' and pass_hash='".$pass."'";
        $result1 = mysqli_query($conn,$qury1);
        // print_r($result1);
        $row1 = mysqli_fetch_assoc($result1);
        if(isset($row1['quiz_s_id'])){
            // echo "fuck of";
            // $_SESSION['status'] = 1;
            $_SESSION['unique_user_id'] = $row1['unique_user_id'];
            $_SESSION['quiz_s_id'] = $row1['quiz_s_id'];
            $_SESSION['flag'] = 1;
            header("Location:../quiz.php");
            exit;
        }
        }
    }
        if($_SESSION['flag'] == 0 ){
            header("Location:../index.php");
            exit;
        }
?>