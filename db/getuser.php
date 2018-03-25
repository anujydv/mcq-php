<?php
require_once("connect.php");
require_once("result.php");
$query2 = "select * from user where unique_user_id='".$row['unique_user_id']."'";
$result2 = mysqli_query($conn,$query1);
?>