<?php
$db_host = "localhost";
$db_user = "root";
$db_pw = "111111";
$db_name = "tutorials";
$connect = mysqli_connect($db_host,$db_user,$db_pw,$db_name);
if($connect)
  echo "db is connected!";
else
  echo "db is not connected...";
$result = mysqli_query($connect,"insert into info(song_name,song_artist,song_url) value('$_POST[song_name]','$_POST[song_artist]','$_POST[song_url]')");
echo $result;
echo "<br>";
mysqli_close($connect);
?>
