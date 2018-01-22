<?php


$db_host = "localhost";
$db_user = "root";
$db_pw = "111111";
$db_name = "tutorials";
$connect = mysqli_connect($db_host,$db_user,$db_pw,$db_name);

if(!$connect)
  echo "ERROR! : failed to CONNECT server";
  
$result = mysqli_query($connect,"select song_no from info;");

$total = mysqli_num_rows($result);

while($total>-1){
  $number = $total / 20 + 1;
  echo "<a href='admin_delete.php?page='$number' class='page'> $number </a>";
  $total = $total - 20;
}

?>
