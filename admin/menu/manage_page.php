
    <?php
    $page = $_GET['page'];
    if($page>-1){
                        include $_SERVER['DOCUMENT_ROOT'].'/dbconnect.php';
        
                        $page_num = $page*20;
                        $data_num = 20;
        
                        echo "<table class='type03' style='table-layout:fixed'><tr><th class='small'>
                                <span style='CURSOR: hand' onclick=this.nextSibling.style.display=(this.nextSibling.style.display=='none')?'block':'none';>번  호</span><div style='display: none'><HR> <input type='checkbox'>오름차순<input type='checkbox'>내림차순<HR></div></th>
                                <th><span style='CURSOR: hand' onclick=this.nextSibling.style.display=(this.nextSibling.style.display=='none')?'block':'none';>아티스트</span><div style='display: none'><HR> <input type='checkbox'>오름차순<input type='checkbox'>내림차순<HR></div></th>
                                <th class='large'>곡  명</th>
                                <th>주소값</th>
                                <th class='small'>장 르</th>
                                <th>등록일자</th></tr>";
        
                        $result = mysqli_query($connect,"select * from info limit $page_num,$data_num");
        
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
