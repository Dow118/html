<?php

    $song_name = $_GET['song'];

    include $_SERVER['DOCUMENT_ROOT'].'/dbconnect.php';

    $query = "SELECT song_no,song_artist,song_name,song_url,song_category FROM info WHERE song_artist like '%$song_name%'";
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
                echo "<a class='image' href='../main.html?id=".$song[0]."'>";
                echo "<img src='https://img.youtube.com/vi/$song[3]/default.jpg' class='img' name='$song[2]'>";
                echo "</a>";
                echo "<div class='text'>";
                echo "<div class='song'>";
                echo "<a href='../main.html?id=".$song[0]."'>".$song[2]."</a>";
                echo "</div>";
                echo "<hr size='1'>";
                echo "<a>$song[1]&emsp;</a>";
                echo "<a href='https://www.youtube.com/watch?v=$song[3] 'target='_blank'>&#60;Youtube에서 보기&#62;</a>";
                echo "</div></div>";
            } while( $song = mysqli_fetch_row($result) ) ;
            echo "</div>";
        }
    }

    echo "<div class='wrap1'>";
    echo "<hr size='3'>";
    echo "</div>";

    $query2 = "SELECT song_no,song_artist,song_name,song_url,song_category FROM info WHERE song_name like '%$song_name%'";
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
                echo "<a class='image' href='../main.html?id=".$song2[0]."'>";
                echo "<img src='https://img.youtube.com/vi/$song2[3]/default.jpg' class='img' name='$song2[2]'>";
                echo "</a>";
                echo "<div class='text'>";
                echo "<div class='song'>";
                echo "<a href='../main.html?id=".$song2[0]."'>".$song2[2]."</a>";
                echo "</div>";
                echo "<hr size='1'>";
                echo "<a>$song2[1]&emsp;</a>";
                echo "<a href='https://www.youtube.com/watch?v=$song2[3] 'target='_blank'>Youtube에서 보기</a>";
                echo "</div></div>";
            } while( $song2 = mysqli_fetch_row($result2) ) ;
            echo "</div>";
        }
    }

?>