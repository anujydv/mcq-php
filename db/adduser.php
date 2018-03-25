<?php
require_once("connect.php");
$u_ur_id = $_POST['u_ur_id'];
$quiz_event = $_POST['events'];
$quiz_round = $_POST['round'];
function generateRandomString($length = 8) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
$pass = generateRandomString();
echo $pass;
$query = "select q_id from bnoises where q_event=".$quiz_event." and q_round=".$quiz_round."";
echo $query."\n\n";
$result = mysqli_query($conn,$query);
$ques = array();
while($row = mysqli_fetch_assoc($result)){
    array_push($ques,$row['q_id']);
}
    shuffle($ques);
    $q_str = implode(",",$ques);
echo $q_str;
print_r($ques);

$query1 = "insert into bnoisesResult (unique_user_id,pass_hash,que_seq,quiz_event,quiz_round) values('".$u_ur_id."','".$pass."','".$q_str."',".$quiz_event.",".$quiz_round.")"; 
echo $query1;
mysqli_query($conn,$query1);
$_SESSION['cr'] = 1;
header("Location:../createUser.php");

?>