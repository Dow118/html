<?php

include './html/dbconnect.php';

$result = mysqli_query($connect,"delete from info where song_no=$_POST[key]");

if(!$result)
  echo "ERROR! : failed to SEND data";
else{
  mysqli_query($connect,"alter table info auto_increment=1;");
  mysqli_query($connect,"set @cnt=0;");
  mysqli_query($connect,"update info set info.song_no=@cnt:=@cnt+1;");
  echo("<script>location.replace('./admin/menu/manage.html');</script>");
  }


?>
