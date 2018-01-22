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
  $i = 0;
  $number[$i] = intval($total/20) + 1;
  $total = $total - 20;
  $i = $i + 1;
}

echo $number;

for($j = $i; $j>-1; $j--){
  echo "<a href='admin_delete.php?page='$number[$j]' class='page'> $j </a>";
}


?>
