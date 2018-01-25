<?php

include $_SERVER['DOCUMENT_ROOT'].'/dbconnect.php';

$result = mysqli_query($connect,"delete from info where song_no=$_POST[key]");

if(!$result)
  echo "ERROR! : failed to SEND data";
else{
  mysqli_query($connect,"alter table info auto_increment=1;");
  mysqli_query($connect,"set @cnt=0;");
  mysqli_query($connect,"update info set info.song_no=@cnt:=@cnt+1;");
  echo("<script>alert('삭제 완료!');</script>");
  echo("<script>location.replace('./manage.html');</script>");
  }


?>
