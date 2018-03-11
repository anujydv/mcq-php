<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Event Result</title>
    <style>
    .container{
        width:1000px;
        margin:auto;
    }
    table,tr,th,td{
        border:2px solid black;
        border-collapse:collapse;
        border-spacing:50px;
    }
    th,td{
        text-align:center;
        padding:10px 20px;
    }
    </style>
</head>
<body>
<div class="container">
<?php
require_once("connect.php");
$event = $_GET["Resultevents"];
$round = $_GET["round"];
$query1 = "select * from events where id=".$event."";
$result1 = mysqli_query($conn,$query1);
$row1 = mysqli_fetch_array($result1);
$query = "select * from bnoisesResult where quiz_event=".$event." and quiz_round=".$round."";
$result = mysqli_query($conn,$query);
if($result->{'num_rows'}>0){
echo "<table><thead><tr><th>Sr No.</th><th>Participant Name</th><th>User ID</th><th>Mobile</th><th>Event</th><th>Marks Score</th></tr></thead>";
$i=1;
while($row = mysqli_fetch_assoc($result)){
    $query2 = "select * from user where unique_user_id='".$row['unique_user_id']."'";
    $result2 = mysqli_query($conn,$query2);
    $row3 = mysqli_fetch_assoc($result2);
    echo "<tr>";
    echo "<td>".$i."</td><td>".$row3['username']."</td><td>".$row['unique_user_id']."</td><td>".$row3['phone_number']."</td><td>".$row1['name']."</td><td>".$row['result']."</td>";
    echo "</tr>";
    $i+=1;
}
echo "</table>";
}
else{
    echo "<h1>No participant submited the Quiz</h1>";
}
?>
</div>
</body>
</html>