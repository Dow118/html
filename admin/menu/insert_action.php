<?php
include $_SERVER['DOCUMENT_ROOT'].'/dbconnect.php';

mysqli_query($connect, "set session character_set_connection=utf8;");
mysqli_query($connect, "set session character_set_results=utf8;");
mysqli_query($connect, "set session character_set_client=utf8;");

$result = mysqli_query($connect,"insert into info(song_no, song_name,song_artist,song_url, song_category, song_date)
 value(default, '$_POST[song_name]','$_POST[song_artist]','$_POST[song_url]', '$_POST[song_category]', default)");

mysqli_query($connect,"alter table info auto_increment=1;");
mysqli_query($connect,"set @cnt=0;");
mysqli_query($connect,"update info set info.song_no=@cnt:=@cnt+1;");

if($result)
  echo("<script>location.replace('./insert.html');</script>"); 
else
  echo "ERROR! : failed to SEND data";
echo "<br>";

mysqli_close($connect);
?>
