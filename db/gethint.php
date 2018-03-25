<?php
require_once('connect.php');
$ques = $_GET['q'];
// $ques = 1;
$qury1 = "select q_hint from bnoises where q_id=$ques";
$result1 = mysqli_query($conn,$qury1);
$row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);
echo $row1['q_hint'];
$qury3 = "select use_hint from bnoisesResult where quiz_s_id=1";
$result3 = mysqli_query($conn,$qury3);
$row3 = mysqli_fetch_array($result3,MYSQLI_ASSOC);
$hint = $row3['use_hint'];
$hint+=1;
$qury2 = "update bnoisesResult set use_hint = ".$hint." where quiz_s_id=1";
mysqli_query($conn,$qury2);
?>