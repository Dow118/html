<?php
$db_host = "localhost";
$db_user = "root";
$db_pw = "111111";
$db_name = "tutorials";
$connect = mysqli_connect($db_host,$db_user,$db_pw,$db_name);
if(!$connect)
  echo "ERROR! : failed to CONNECT server";
  
$result = mysqli_query($connect,"select * from info limit 0, 10");
 
if(!$result)
  echo "ERROR! : failed to SEND data";
  
echo "<br>";
mysqli_close($connect);
?>
