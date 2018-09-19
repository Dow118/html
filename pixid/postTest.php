<?php

$id = $_POST['id'];
$score = $_POST['score'];
$char = $_POST['char'];


include $_SERVER['DOCUMENT_ROOT'].'/dbconnect.php';

$result = mysqli_query($connect,"insert into UOSRunner(user_id, user_score, user_date, user_char)
 value('$id', '$score', default, '$char')");

if($result)
  echo "OK!"; 
else
  echo "ERROR! : failed to SEND data";

?>
