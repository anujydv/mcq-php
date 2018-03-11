<?php
session_start();
$_SESSION['timing'] = 0;
require_once("connect.php");
$event = $_POST["event"];
$round = $_POST["round"];
$score = $_POST["score"];
$time = $_POST["time"];
$hint = $_POST["hint"];
$query1 = "insert into quizMarking (marking_event,event_round,marking,quiz_time,hint_status) values (".$event.",".$round.",".$score.",".$time.",".$hint.")";
echo $query1;
if(mysqli_query($conn,$query1)){
    $_SESSION['timing'] = 1;
}
header("Location:../addevent.php");
?>