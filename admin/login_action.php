<?php

include '/dbconnect.php';

// set Query to DB - get password
$result = mysqli_query($connect,"select password from admin");

// fetch data - password
while($row = mysqli_fetch_row($result)){
     $pass = $row[0];
}

// configuration password
if($_POST["isPassword"]==$pass){
    echo("<script>location.replace('./menu.html');</script>"); 
  }
  else{
    echo("<script>location.replace('/index.html');</script>"); 
  }
?>
