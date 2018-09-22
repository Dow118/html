<?php

$id = $_POST['id'];
$character = $_POST['character'];
$score = $_POST['score'];

include $_SERVER['DOCUMENT_ROOT'].'/dbconnect.php';
$result = mysqli_query($connect, "update UOSRunner set user_character='$character', user_score='$score' where user_id='$id'");
if($result){
    echo "complete";
}
else
  echo "ERROR";
  
?>
