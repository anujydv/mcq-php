<?php
$query2 = "select quiz_time,hint_status from quizMarking where marking_event=".$row['quiz_event']." and event_round=".$row['quiz_round']."";
// echo $query1;
$result2 = mysqli_query($conn,$query2);
// print_r($result1);
$row2 = mysqli_fetch_assoc($result2);
// $row1['quiz_time']
?>