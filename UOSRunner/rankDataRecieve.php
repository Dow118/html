<?php


$id = $_POST['id'];

include $_SERVER['DOCUMENT_ROOT'].'/dbconnect.php';

$result = mysqli_query($connect,"SELECT * from UOSRunner");


if($result){
  while($r = mysql_fetch_assoc($result)){
      echo json_encode($r);
  }
}

else
  echo "ERROR";
  
  
  
?>
