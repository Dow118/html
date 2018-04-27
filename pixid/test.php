
<?php

include $_SERVER['DOCUMENT_ROOT'].'/dbconnect.php';

$resultR = mysqli_query($connect, "select json_extract(data, '$.bodyR') from pixid;");
$resultG = mysqli_query($connect, "select json_extract(data, '$.bodyG') from pixid;");
$resultB = mysqli_query($connect, "select json_extract(data, '$.bodyB') from pixid;");


//$result = mysqli_query($connect, "select * from pixid;");
 
while($row = mysqli_fetch_row($resultR)){
     $R = $row[0];
}
while($row = mysqli_fetch_row($resultG)){
     $G = $row[0];
}
while($row = mysqli_fetch_row($resultB)){
     $B = $row[0];
}
echo $R.$G.$B;

?>
