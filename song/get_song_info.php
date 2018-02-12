<?php
    
    $sql = 'SELECT song_artist,song_name,song_url FROM info WHERE song_no='.$_GET['id'];
    $result = mysqli_query($connect,$sql);
    $row = mysqli_fetch_assoc($result);
    echo "<h1>".$row['song_artist']." - ".$row['song_name']."</h1>";
    echo "<iframe width='680' height='360' src='https://www.youtube.com/embed/".$row['song_url']."'frameborder='0' allowfullscreen></iframe>"."<br><br>";
    echo "<a href='https://www.youtube.com/watch?v=".$row['song_url']."'target='_blank'>&#60;Youtube에서 보기&#62;</a><br><br>";
    echo "<form method='get'><input type='hidden' name='song' value='".$row['song_artist']."'>";
    echo "<input type='submit' id='back' value='검색목록으로'></form>";
    
?>