<?php

$id = $_POST['id'];
$myId = $_POST['myId'];

include $_SERVER['DOCUMENT_ROOT'].'/dbconnect.php';
$result = mysqli_query($connect, "update UOSRunner set user_id='$id' where user_id='$myId'");

if($result){
    echo "complete";
}
else
  echo "ERROR";
  
?>
