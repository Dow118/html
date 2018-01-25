<?php

include $_SERVER['DOCUMENT_ROOT'].'/dbconnect.php';

// set Query to DB - get password
$result = mysqli_query($connect,"select password from admin");

// fetch data - password
while($row = mysqli_fetch_row($result)){
     $pass = $row[0];
}

// configuration password
if($_POST["isPassword"]==$pass){
    echo("<script>alert('pass');</script>");
    echo("<script>location.replace('./menu.html');</script>"); 
  }
  else{
    echo("<script>alert('');</script>");
    echo("<script>location.replace('/index.html');</script>"); 
  }
?>
