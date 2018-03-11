<?php
require_once("connect.php");
require_once("getresultview.php");
$query1 = "select * from events where id=".$row['quiz_event']."";
$result1 = mysqli_query($conn,$query1);
$row1 = mysqli_fetch_array($result1);
?>