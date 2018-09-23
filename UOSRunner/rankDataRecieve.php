<?php


$id = $_POST['id'];

include $_SERVER['DOCUMENT_ROOT'].'/dbconnect.php';

$result = mysqli_query($connect,"SELECT
    user_id, user_score, user_character,
    ( @real_rank := IF ( @last > user_score, @real_rank:=@real_rank+1, @real_rank ) ) AS real_rank,
    ( @last := user_score )
FROM
    UOSRunner AS a ,
    ( SELECT @last := 0, @real_rank := 1 ) AS b 
ORDER BY
    a.user_score DESC
LIMIT
    0,10;");


if($result){
  while($r = mysql_fetch_assoc($result)){
      echo json_encode($r);
  }
}

else
  echo "ERROR";
  
  
  
?>
