<?php

    $song_name = $_GET['song'];

    include $_SERVER['DOCUMENT_ROOT'].'/dbconnect.php';

    $query = "SELECT song_artist,song_name,song_url,song_category FROM info WHERE song_artist like '%$song_name%'";
    if($result = mysqli_query($connect,$query)) {
        if(!$song) echo "<h1> no song in DB</h1>";
        else {
            while($song = mysqli_fetch_row($result)) {
                echo "<div class='wrap'>";
                echo "<div class='image'>";
                echo "<img src='https://img.youtube.com/vi/$song[2]/default.jpg' class='img' name='$song[1]'>";
                echo "</div>";
                echo "<div class='text'>";
                echo "<div class='song'>";
                echo "<a>$song[1]</a>";
                echo "</div>";
                echo "<hr size='1'>";
                echo "<a>$song[0]&emsp;</a>";
                echo "<a href='https://www.youtube.com/watch?v=$song[2] 'target='_blank'>Youtube에서 보기</a>"; 
                echo "</div></div>";     
            }
        }
    }

?>