 <?php
$db_host = "localhost";
$db_user = "root";
$db_pw = "111111";
$db_name = "tutorials";
$connect = mysqli_connect($db_host,$db_user,$db_pw,$db_name);
if($connect)
  echo "db is connected";
else
  echo "db is not connected";
$result = mysqli_query($connect, "select * from info");
$row=mysqli_fetch_array($result)

echo $row[0];
echo $row[1];
mysqli_close($connect);
?>
