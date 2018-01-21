<?php

$db_host = "localhost";
$db_user = "root";
$db_pw = "111111";
$db_name = "tutorials";
$connect = mysqli_connect($db_host,$db_user,$db_pw,$db_name);

if(!$connect)
  echo "ERROR! : failed to CONNECT server";
  
$result = mysqli_query($connect,"delete from info where song_no=$_POST[key]");

if(!$result)
  echo "ERROR! : failed to SEND data";
else{
  mysqli_query("alter table info auto_increment=1;");
  mysqli_query("set @cnt=0;");
  mysqli_query("update info set info.song_no=@cnt:=@cnt+1;");
  echo("<script>location.replace('./admin_delete.php');</script>");
  }


?>
