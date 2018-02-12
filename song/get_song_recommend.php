<?php

    $sql = 'SELECT song_artist FROM info WHERE song_no='.$_GET['id'];
    $result = mysqli_query($connect,$sql);
    $row = mysqli_fetch_row($result);
    $sql = "SELECT song_no,song_artist,song_name,song_url FROM info WHERE song_artist = '$row[0]'";
    $i = 0;
    $result = mysqli_query($connect,$sql);
    while($song = mysqli_fetch_assoc($result)){
        $data[$i]['no'] = $song['song_no'];
        $data[$i]['artist'] = $song['song_artist'];
        $data[$i]['name']   = $song['song_name'];
        $data[$i]['url']    = $song['song_url'];
        $i = $i + 1;
    }
    foreach($data as $song){
        if($song['no'] == $_GET['id'])
            $temp = $song;
    }
    if(count($data)>3){
        for($i = 0; $i < 3; $i++){
            $arr[$i] = mt_rand(0,count($data)-1);
            for($j = 0; $j < $i; $j++){
                if(($arr[$i] == $arr[$j]) || ($data[$arr[$i]]['name'] == $temp['name'])){
                    $i = $i - 1;
                    break;
                }
            }
        }
        for($i = 0; $i < 3; $i++){
            echo "<div class='wrap'>";
            echo "<div class='image'><a href='./main.html?id=".$data[$arr[$i]]['no']."'>";
            echo "<img src='https://img.youtube.com/vi/".$data[$arr[$i]]['url']."/default.jpg' class='img' name='".$data[$arr[$i]]['name']."'></a></div>";
            echo "<div class='text'><a href='./main.html?id=".$data[$arr[$i]]['no']."'>".$data[$arr[$i]]['artist']." - ".$data[$arr[$i]]['name']."</a>";
            echo "<hr size='1'>";
            echo "<a href='https://www.youtube.com/watch?v=".$data[$arr[$i]]['url']."'target='_blank'>&#60;Youtube에서 보기&#62;</a></div></div>";
        }
    }
    else if(count($data)<4 && count($data)>1){
        for($i = 0; $i < count($data); $i++){
            if($data[$i]['name'] == $temp['name']) continue;
            echo "<div class='wrap'>";
            echo "<div class='image'><a href='./main.html?id=".$data[$arr[$i]]['no']."'>";
            echo "<img src='https://img.youtube.com/vi/".$data[$i]['url']."/default.jpg' class='img' name='".$data[$i]['name']."'></a></div>";
            echo "<div class='text'><a href='./main.html?id=".$data[$i]['no']."'>".$data[$i]['artist']." - ".$data[$i]['name']."</a>";
            echo "<hr size='1'>";
            echo "<a href='https://www.youtube.com/watch?v=".$data[$i]['url']."'target='_blank'>&#60;Youtube에서 보기&#62;</a></div></div>";
        }
    }
    
?>