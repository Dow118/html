<?php

$id = $_POST['id'];

include $_SERVER['DOCUMENT_ROOT'].'/dbconnect.php';

$result = mysqli_query($connect, "select COUNT(user_id) from UOSRunner where user_id='$id'");


if($result){
  if($result == 0)
  echo "able"; 
  else
  echo "unable";
}
else
  echo "ERROR";



?>
