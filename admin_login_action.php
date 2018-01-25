<?php

include './dbconnect.php';

$result = mysqli_query($connect,"select password from admin");

  while($row = mysqli_fetch_row($result)){
     $pass = $row[0];
  }

if($_POST["isPassword"]==$pass){
    echo("<script>location.replace('./admin_menu.html');</script>"); 
  }
  else{
    echo("<script>location.replace('./index.html');</script>"); 
  }
?>
