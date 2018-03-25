<?php
session_start();
require_once("connect.php");
$query = "select * from bnoisesResult where quiz_s_id=".$_SESSION['quiz_s_id']."";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);
// $query1 = "select quiz_time form quizMarking where marking_event=".$row['quiz_event']." and event_round=".$row['quiz_round']."";
// $result1 = mysqli_query($conn,$query1);
// $row1 = mysqli_fetch_assoc($result1);
$_SESSION['quiz_status'] = $row['quiz_status'];
$ques = explode(',',$row['que_seq']);
?>