<?php

include $_SERVER['DOCUMENT_ROOT'].'/dbconnect.php';

 mysqli_query($connect, "set session character_set_connection=utf8;");
 mysqli_query($connect, "set session character_set_results=utf8;");
 mysqli_query($connect, "set session character_set_client=utf8;");

 $result = mysqli_query($connect,"select * from info where song_no=$_POST[key]");

 echo "<form method='post' action='./modify_action.php'>";
 while($row=mysqli_fetch_row($result)){
                          echo "<input type='hidden' name='song_no' value='$row[0]'>";
                          echo "<label>곡       명 : </label><input type='text' name='song_artist' value='$row[1]'/><br>";
                          echo "<label>아 티 스 트 : </label><input type='text' name='song_name' value='$row[2]'/><br>";
                          echo "<label>주       소 : </label><input type='text' name='song_url' value='$row[3]'/><br>";
                          echo "<label>카 테 고 리 : </label><select name='song_category' />";
                          echo "<option value='' selected>--재 선택 --</option>";
                             $result = mysqli_query($connect,"select distinct song_category from info");
                          while($row=mysqli_fetch_row($result)){
                          echo "<option value='$row[0]'> $row[0] </option>";
                          }
 }
 echo "</select><br><input type='submit' value='수정하기'/><br>";
 echo "</form>";
?>
