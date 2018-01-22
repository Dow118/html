<?php

$db_host = "localhost";
$db_user = "root";
$db_pw = "111111";
$db_name = "tutorials";
$connect = mysqli_connect($db_host,$db_user,$db_pw,$db_name);

if(!$connect)
  echo "ERROR! : failed to CONNECT server";
  
$result = mysqli_query($connect,"update info set song_artist='$_POST[song_artist]', song_name='$_POST[song_name]', song_url='$_POST[song_url]', song_category='$_POST[song_category]' where song_no='$_POST[song_no]'");
 
  mysqli_query($connect,"alter table info auto_increment=1;");
  mysqli_query($connect,"set @cnt=0;");
  mysqli_query($connect,"update info set info.song_no=@cnt:=@cnt+1;");
  
if($result)
  echo("<script>location.replace('./admin_delete.php?menu=0');</script>"); 
else
  echo "ERROR! : failed to SEND data";
  
echo "<br>";
mysqli_close($connect);

?>
