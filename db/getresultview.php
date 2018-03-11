<?php
session_start();
require_once("connect.php");
$query = "select * from bnoisesResult where unique_user_id='".$_SESSION['unique_user_id']."' and que_ans_seq IS NOT NULL";
$result = mysqli_query($conn,$query);
?>