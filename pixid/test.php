
<?php

include $_SERVER['DOCUMENT_ROOT'].'/dbconnect.php';

$result = mysqli_query($connect, "select json_extract(data, '$.name') from pixid;");
 
while($row = mysqli_fetch_row($result)){
     $name = $row[0];
}

echo $name;

?>
