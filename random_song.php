<?php

include $_SERVER['DOCUMENT_ROOT'].'/dbconnect.php';

if($result = mysqli_query($connect,"SELECT * FROM info")) {
    $row_cnt = mysqli_num_rows($result);

    $randomNum = mt_rand(1,$row_cnt);

    $query = "SELECT song_url FROM info WHERE song_no = '$randomNum'";
    if($result2 = mysqli_query($connect,$query)) {
        $url = mysqli_fetch_row($result2);
    }

    mysqli_free_result($result2);
    mysqli_free_result($result);
}

mysqli_close($connect);

?>