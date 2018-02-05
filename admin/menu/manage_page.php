
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
        $sortBy = $_GET['order'];
    }
    
    if(!$_GET['filterByArtist']){
        $filter_artist = 'null';
    }
    else{
        $filter_artist = $_GET['filterByArtist'];
    }

    if($page>-1){
                        include $_SERVER['DOCUMENT_ROOT'].'/dbconnect.php';
        
                        $page_num = $page*20;
                        $data_num = 20;
        
                        echo "<table class='type03' style='table-layout:fixed'><tr><th class='small'>
                                <span id=$order style='CURSOR: hand' onclick=\"this.id=(this.id=='asc')?'desc':'asc'; location.href='./manage.html?page=$page&order='+this.id+'&sortBy=song_no&filterByArtist=$filter_artist'\">번  호</span></th>
                                <th><span style='CURSOR: hand' onclick=this.nextSibling.style.display=(this.nextSibling.style.display=='none')?'block':'none'; >아티스트</span><div style='display: none'>";
        
                        $result = mysqli_query($connect, "select distinct song_artist from info");
        
                        while($row=mysqli_fetch_row($result)){
                            echo "<input type='radio' id='$row[0]' value='$row[0]' onclick='checkbox_event(this);'> $row[0]<br>";
                        }           
                        echo "</div></th>
                                <th class='large'>
                                <span id=$order style='CURSOR: hand' onclick=\"this.id=(this.id=='asc')?'desc':'asc'; location.href='./manage.html?page=$page&order='+this.id+'&sortBy=song_name&filterByArtist=$filter_artist\">곡  명</span></th>
                                <th>주소값</th>
                                <th class='small'><span style='CURSOR: hand' onclick=this.nextSibling.style.display=(this.nextSibling.style.display=='none')?'block':'none'; >장 르</span><div style='display: none'>";
        
                        $result = mysqli_query($connect, "select distinct song_category from info");
        
                        while($row=mysqli_fetch_row($result)){
                            echo "<input type='radio' id='$row[0]' value='$row[0]' onclick='checkbox_event(this);'> $row[0]<br>";
                        }    
                        echo "</div></th>
                                <th>등록일자</th></tr>";
                        
                        $query = "select * from info";
        
                        if($filter_artist != 'null'){
                            $query2 = " where song_artist='$order_artist' ";
                        }
                        else $query2 = " ";
                        $query3 = "order by $sortBy $order limit $page_num,$data_num";
                        $query_result = $query.$query2.$query3;
        
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
