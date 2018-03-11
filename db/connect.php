<?php
define('HOST',"localhost");
define('USER',"root");
define('PASS',"admin");

$conn = mysqli_connect(HOST,USER,PASS);
mysqli_select_db($conn,"esummit");
if($conn){
    // echo "login sucess full";
}
else{
    die(mysqli_connect_error());
}


?>