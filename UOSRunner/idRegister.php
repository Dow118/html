<?php

$id = $_POST['id'];

include $_SERVER['DOCUMENT_ROOT'].'/dbconnect.php';

$result = mysqli_query($connect,"insert into UOSRunner(user_id, user_date) value('$id', default)");


if($result)
  echo "complete";
else
  echo "ERROR";



?>
