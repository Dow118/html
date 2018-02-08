<?php

include $_SERVER['DOCUMENT_ROOT'].'/dbconnect.php';

//$result = mysqli_query($connect,"select song_no from info;");


$total = mysqli_num_rows($result);
$i=0;

while($total>-1){
  $number[$i] = intval($total/20) + 1;
  $total = $total - 20;
  $i = $i + 1;
}


    if(!$_GET['sortBy']){
        $sortBy = 'song_no';
    }   
    else{
        $sortBy = $_GET['sortBy'];
    }

    if(!$_GET['order']){
        $order = 'asc';
    }
    else{
        $order = $_GET['order'];
    }
    
    if(!$_GET['filterByArtist']){
        $filter_artist = 'null';
    }
    else{
        $filter_artist = $_GET['filterByArtist'];
    }

    if(!$_GET['filterByCategory']){
        $filter_category = 'null';
    }
    else{
        $filter_category = $_GET['filterByCategory'];
    }
    if(!$_GET['filterByDate_start']){
        $filter_startdate = "2018-01-01";
    }
    else{
        $filter_startdate = $_GET['filterByDate_start'];
    }

    if(!$_GET['filterByDate_finish']){
        $filter_finishdate = date("Y-m-d");
    }
    else{
        $filter_finishdate = $_GET['filterByDate_finish'];
    }

for($j = count($number)-1; $j>-1; $j--){
  $pagenumber = $number[$j] - 1;
  //echo "<a href='./manage.html?page=$pagenumber' class='page'> $number[$j] </a>";
  echo "<button type='submit' class='page' name='page' value='$number[$j]'></form>";
}

  



?>
