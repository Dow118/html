<?php

    $song_name = $_GET['song'];

    include $_SERVER['DOCUMENT_ROOT'].'/dbconnect.php';

    $query = "SELECT song_artist,song_name,song_url,song_category FROM info WHERE song_artist like '%$song_name%'";
    if($result = mysqli_query($connect,$query)) {
        $song = mysqli_fetch_row($result) ;
        if(!$song) { echo "<h1> There is no artist like '$song_name' in DB</h1>"; }
        else {
            echo "<div class='wrap1'>";
            echo "<p style='font-size:18px'>&#14;Artist로 '$song_name'을(를) 검색한 결과</p>";
            echo "</div>";

            echo "<div class='wrap1'>";
            do {
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
            } while( $song = mysqli_fetch_row($result)) ;
            echo "</div>";
        }
    }

    echo "<div class='wrap1'>";
    echo "<hr size='3'>";
    echo "</div>";

    $query2 = "SELECT song_artist,song_name,song_url,song_category FROM info WHERE song_name like '%$song_name%'";
    if($result2 = mysqli_query($connect,$query2)) {
        $song2 = mysqli_fetch_row($result2) ;
        if(!$song2) { echo "<h1> There is no song like '$song_name' in DB</h1>"; }
        else {
            echo "<div class='wrap1'>";
            echo "<p style='font-size:18px'>&#14;Song Name으로 '$song_name'을(를) 검색한 결과</p>";
            echo "</div>";

            echo "<div class='wrap1'>";
            do {
                echo "<div class='wrap'>";
                echo "<div class='image'>";
                echo "<img src='https://img.youtube.com/vi/$song2[2]/default.jpg' class='img' name='$song2[1]'>";
                echo "</div>";
                echo "<div class='text'>";
                echo "<div class='song'>";
                echo "<a>$song2[1]</a>";
                echo "</div>";
                echo "<hr size='1'>";
                echo "<a>$song2[0]&emsp;</a>";
                echo "<a href='https://www.youtube.com/watch?v=$song2[2] 'target='_blank'>Youtube에서 보기</a>"; 
                echo "</div></div>";     
            } while( $song2 = mysqli_fetch_row($result2)) ;
            echo "</div>";
        }
    }
?>