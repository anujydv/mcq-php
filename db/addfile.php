<?php
require_once("connect.php");
$qry = "select * from events";
$result = mysqli_query($conn,$qry);
?>