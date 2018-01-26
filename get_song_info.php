<?php
    $data = array();

    $song_name = $_GET['song_name'];

    include $_SERVER['DOCUMENT_ROOT'].'/dbconnect.php';

    $query = "SELECT song_artist,song_url FROM info WHERE song_name = '$song_name'";

    if($result = mysqli_query($connect,$query)) {
        $song = mysqli_fetch_row($result);
        $data['status'] = 'ok';
        $data['artist'] = $song[0];
        $data['url']    = $song[1];
    }else{
        $data['status'] = 'err';
        $data['artist'] = '';
        $data['url']    = '';
    }

    echo json_encode($data);    

?>