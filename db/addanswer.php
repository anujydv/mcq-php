<?php
session_start();
require_once("connect.php");
$query = "select * from bnoisesResult where quiz_s_id=".$_SESSION['quiz_s_id']."";
echo $query;
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);
$ques = explode(",",$row['que_seq']);
$length = sizeof($ques);
$i=0;
$score = 0;
$query4 = "select marking from quizMarking where marking_event=".$row['quiz_event']." and event_round=".$row['quiz_round']."";
echo $query4;
$result4 = mysqli_query($conn,$query4);
$row4 = mysqli_fetch_assoc($result4);
$mark = $row4['marking'];
echo "\n$mark\n";
$ans = array();
while($i<$length){
    $query3= "select correct_ans from bnoises where q_id=".$ques[$i]."";
    echo $query3;
    $result3 = mysqli_query($conn,$query3);
    $row3 = mysqli_fetch_assoc($result3);
    if($_POST['q_'.$ques[$i]] == $row3['correct_ans']){ 
        $score = $score+$mark;
        echo "<br>$score";
     }
    array_push($ans,$_POST['q_'.$ques[$i]]);
    $str = implode(",",$ans);
    $i+=1;
}

$query2 = "update bnoisesResult set que_ans_seq='".$str."' ,result=".$score.",quiz_status=1 where quiz_s_id=".$_SESSION['quiz_s_id']."";
echo $query2;
if(mysqli_query($conn,$query2)){
        header("Location:../quiz.php");
}
?>