
<?php

  $db_host = "localhost";
  $db_user = "root";
  $db_pw = "111111";
  $db_name = "tutorials";
  $connect = mysqli_connect($db_host,$db_user,$db_pw,$db_name);
    

  $result = mysqli_query($connect,"select password from admin");
  while($row = mysqli_fetch_row($result)){
     $pass = $row[0];
  }
  mysqli_close($connect);

?>
