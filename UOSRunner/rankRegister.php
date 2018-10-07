<?php

$id = $_POST['id'];
$character = $_POST['character'];
$score = $_POST['score'];

include $_SERVER['DOCUMENT_ROOT'].'/dbconnect.php';

// 1. check if the score is BEST SCORE
$result = mysqli_query($connect, "select user_score from UOSRunner where user_id='$id'");
$r = mysqli_fetch_row($result);

$r = (int)$r;
$score = (int)$score;

if(is_numeric($r)&&is_numeric($score)){

if($r<=$score){
    // 2. if BEST SCORE, register it.
    $result = mysqli_query($connect, "update UOSRunner set user_character='$character', user_score='$score' where user_id='$id'");
    
    if($result)
        echo "complete";
    else
        echo "ERROR";
}
}

?>
