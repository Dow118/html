<?php
    include $_SERVER['DOCUMENT_ROOT'].'/dbconnect.php';

    $get_category = mysqli_query($connect,"select distinct song_category from info");

    echo "<ul>";

    while($category=mysqli_fetch_row($get_category)){
        echo "<li class='menu'>";
        echo "<a>$category[0]</a>";
        echo "<ul class='hide'>";

        $get_artist = mysqli_query($connect,"select distinct song_artist from info where song_category ='$category[0]'");
        while($artist=mysqli_fetch_row($get_artist)){
            echo "<li class='menu' id='artist'>";
            echo "<a>$artist[0]</a>";
            echo "<ul class='hide'>";

            $get_song = mysqli_query($connect,"select song_no,song_name from info where song_artist='$artist[0]'");
            while($song=mysqli_fetch_row($get_song)){
                echo "<li class='song'>";
                echo "<a href='../main.html?id=".$song[0]."'>$song[1]</a>";
                echo "</li>";
            }
            echo "</ul>";
            echo "</li>";
        }
        echo "</ul>";
        echo "</li>";
    }

    echo "</ul>";
?>