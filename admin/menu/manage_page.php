<?php
    $page = $_GET['page'];
    
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

        
    if($page>-1){
                        include $_SERVER['DOCUMENT_ROOT'].'/dbconnect.php';
        
                        $page_num = $page*20;
                        $data_num = 20;
        
                        echo "<table class='type03' style='table-layout:fixed'><tr><th class='small'>
                                <form method='get' action='./manage.html' onsubmit='filter($_GET['submit_artist']);'>
                                <span class='option' id=$order onclick=\"this.id=(this.id=='asc')?'desc':'asc'; location.href='./manage.html?page=$page&order='+this.id+'&sortBy=song_no&filterByArtist=$filter_artist&filterByCategory=$filter_category&filterByDate_start=$filter_startdate&filterByDate_finish=$filter_finishdate'\">번 호</th>
                                <th><span class='option' id=$order onclick=\"this.id=(this.id=='asc')?'desc':'asc'; location.href='./manage.html?page=$page&order='+this.id+'&sortBy=song_artist&filterByArtist=$filter_artist&filterByCategory=$filter_category&filterByDate_start=$filter_startdate&filterByDate_finish=$filter_finishdate'\">아티스트</span>
                                <span class='option' onclick=this.nextSibling.style.display=(this.nextSibling.style.display=='none')?'block':'none'; >▼</span><div class='option_hidden'>";
        
                        $result = mysqli_query($connect, "select distinct song_artist from info");
        
                        echo "<input type='hidden' name='filterByArtist' id='filter_artist' value='$filter_artist'>";
        
                        while($row=mysqli_fetch_row($result)){
                            echo "<input class='optionbutton' type='submit' name='submit_artist' id='$row[0]' value='$row[0]'\"><br>";           
                        }           
                        echo "<input class='optionbutton' type='submit' name='초기화' value='초기화'></div></th>
                                <th class='large'>
                                <span class='option' id=$order onclick=\"this.id=(this.id=='asc')?'desc':'asc'; location.href='./manage.html?page=$page&order='+this.id+'&sortBy=song_name&filterByArtist=$filter_artist&filterByCategory=$filter_category&filterByDate_start=$filter_startdate&filterByDate_finish=$filter_finishdate'\">곡  명</span></th>
                                <th>주소값</th>
                                <th><span class='option' id=$order onclick=\"this.id=(this.id=='asc')?'desc':'asc'; location.href='./manage.html?page=$page&order='+this.id+'&sortBy=song_category&filterByArtist=$filter_artist&filterByCategory=$filter_category&filterByDate_start=$filter_startdate&filterByDate_finish=$filter_finishdate'\">장 르</span>
                                <span class='option' onclick=this.nextSibling.style.display=(this.nextSibling.style.display=='none')?'block':'none'; >▼</span><div class='option_hidden'>";
        
                        $result = mysqli_query($connect, "select distinct song_category from info");
        
                        while($row=mysqli_fetch_row($result)){
                            echo "<input class='optionbutton' type='submit' name='filterByCategory' value='$row[0]'><br>";
                        }    
                        echo "<input class='optionbutton' type='submit' id='filterByCategory' value='null' ></div></th>
                                <th><span class='option' id=$order onclick=\"this.id=(this.id=='asc')?'desc':'asc'; location.href='./manage.html?page=$page&order='+this.id+'&sortBy=song_date&filterByArtist=$filter_artist&filterByCategory=$filter_category&filterByDate_start=$filter_startdate&filterByDate_finish=$filter_finishdate'\">등록일자</span>
                                <span class='option' onclick=this.nextSibling.style.display=(this.nextSibling.style.display=='none')?'block':'none'; >▼</span><div class='option_hidden'>
                                
                                <input type='date' name='filterByDate_start' value='$filter_startdate'>
                                <input type='date' name='filterByDate_finish' value='$filter_finishdate'>
                                <input type='submit' value='입력'></div></form></th></tr>";
                        
                        $query = "select * from info";
        
                        $query2 = " where '$filter_finishdate'>=song_date and song_date>='$filter_startdate'";
        
                        if($filter_artist != 'null' && $filter_category != 'null'){
                            $query3 = " and song_artist='$filter_artist' and song_category='$filter_category' ";
                        }
                        else if($filter_artist == 'null' && $filter_category != 'null'){
                            $query3 = " and song_category='$filter_category' ";
                        }
                        else if($filter_artist != 'null' && $filter_category == 'null'){
                            $query3 = " and song_artist='$filter_artist' ";
                        }
                        else $query3 = " ";
        
                        $query4 = "order by $sortBy $order limit $page_num,$data_num";
                        $query_result = $query.$query2.$query3.$query4;
        
                        $result = mysqli_query($connect, $query_result);
        
                          while($row=mysqli_fetch_row($result)){
                          echo "<form method='POST' action = './delete_action.php'>";
                          echo "<input type='hidden' name='key' value='$row[0]'/>";  
                          echo "<tr><td class='small'>$row[0] </td><td> $row[1] </td><td class='large'> $row[2] </td><td> $row[3] </td><td class='small'> $row[4] </td><td> $row[5] </td>";
                          echo "<td class='button'><input type='submit' value='delete' id='button_delete'></td>";
                          echo "</form>";
                          echo "<form method='POST' action = './modify.html'>";
                          echo "<input type='hidden' name='key' value='$row[0]'>";
                          echo "<td class='button'><input type='submit' value='modify' id='button_modify'/></td>";
                          echo "</form></tr>";
                          }
                        echo "</table>";
    }
    else
      echo "select page below <br>";
    ?>
