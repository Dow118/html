
<?php

$id = $_POST['id'];
include $_SERVER['DOCUMENT_ROOT'].'/dbconnect.php';


$result = mysqli_query($connect,"SELECT *
FROM (SELECT
    user_id, user_score, user_character,
    ( @real_rank := IF ( @last > user_score, @real_rank:=@real_rank+1, @real_rank ) ) AS real_rank,
    ( @last := user_score )
FROM
    UOSRunner AS a ,
    ( SELECT @rank := 0, @last := 0, @real_rank := 1 ) AS b 
ORDER BY
    a.user_score DESC
) result
WHERE
    result.user_id = '$id';");


if($result){
  while($r = mysqli_fetch_assoc($result)){
      echo json_encode($r, JSON_UNESCAPED_UNICODE);
  }
}
else
  echo "ERROR";
  
?>
