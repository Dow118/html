<?php

$db_host = "localhost";
$db_user = "root";
$db_pw = "111111";
$db_name = "tutorials";
$connect = mysqli_connect($db_host,$db_user,$db_pw,$db_name);
if(!$connect)
  echo "ERROR! : failed to CONNECT server";

 $result = mysqli_query($connect,"select * from info where song_no=$_POST[key]");
 echo "<form method='post' action='admin_modify.php'>
 while($row=mysqli_fetch_row($result)){
                          echo "<input type='hidden' name='song_no' value='$row[0]'>";
                          echo "<label>곡    명 : </label><input type='text' name='song_artist' value='$row[1]'/><br>";
                          echo "<label>아 티 스 트 : </label><input type='text' name='sonng_name' value='$row[2]'/><br>";
                          echo "<label>U R L : </label><input type='text' name='song_url' value='$row[3]'/><br>";
                          echo "<label>카 테 고 리 : </label><select name='song_category' />";
                          echo "<option value='' selected>--재 선택 --</option>"
                             $result = mysqli_query($connect,"select distinct song_category from info");
                          while($row=mysqli_fetch_row($result)){
                          echo "<option value='$row[0]'> $row[0] </option>";
                          }
 }
 echo "<br><input type='submit' value='수정하기'/><br>"

?>
