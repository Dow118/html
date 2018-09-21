<?php

$id = $_POST['id'];

include $_SERVER['DOCUMENT_ROOT'].'/dbconnect.php';

$result = mysqli_query($connect, "select COUNT(user_id) from UOSRunner where user_id='$id'");


if($result){
  $row=mysqli_fetch_row($result);
  if($row[0] == 0)
    echo "able"; 
  else
    echo "unable";
}
else
  echo "ERROR";



?>
