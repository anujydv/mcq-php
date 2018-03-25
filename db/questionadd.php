<?php
session_start();
$_SESSION['addques'] = 0;
require_once("connect.php");
$ques = mysqli_real_escape_string($conn, $_POST['question']);
$ans_a =mysqli_real_escape_string($conn, $_POST['option_a']);
$ans_b =mysqli_real_escape_string($conn, $_POST['option_b']);
$ans_c =mysqli_real_escape_string($conn, $_POST['option_c']);
$ans_d =mysqli_real_escape_string($conn, $_POST['option_d']);
$hint =mysqli_real_escape_string($conn, $_POST['hint']);
$event = $_POST['events'];
$round = $_POST['round'];
$correct_ans = $_POST['ans'];
if(isset($hint)){
    $_SESSION['addques'] = 1;
    $query = "insert into bnoises(q_que,ans_a,ans_b,ans_c,ans_d,q_hint,q_event,q_round,correct_ans,currentTimeStamp) values('".$ques."','".$ans_a."','".$ans_b."','".$ans_c."','".$ans_d."','".$hint."',".$event.",".$round.",".$correct_ans.",CURRENT_TIMESTAMP)";
    if(mysqli_query($conn,$query)){
        $_SESSION['addques'] = 1;
    }
    header('Location:../addquestion.php');
}
else{
    $query = "insert into bnoises(q_que,ans_a,ans_b,ans_c,ans_d,q_event,q_round,correct_ans,currentTimeStamp) values('".$ques."','".$ans_a."','".$ans_b."','".$ans_c."','".$ans_d."',".$event.",".$round.",".$correct_ans.",CURRENT_TIMESTAMP)";
    if(mysqli_query($conn,$query)){
        $_SESSION['addques'] = 1;
    }
    header('Location:../addquestion.php');
}
?>