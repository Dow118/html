    <?php

    $page = $_GET['page'];

    if($page>-1){
                        include $_SERVER['DOCUMENT_ROOT'].'/dbconnect.php';
        
                        $page_num = $page*20;
                        $data_num = 20;
        
                        $result = mysqli_query($connect,"select * from info limit $page_num,$data_num");
        
                          while($row=mysqli_fetch_row($result)){
                          echo "<form method='POST' action = './delete_action.php'>";
                          echo "<input type='hidden' name='key' value='$row[0]'/>";
                          echo "<table class='type03'><tr><th scope='row'>번  호</th><th scope='row'>아티스트</th><th scope='row'>곡  명</th><th scope='row'>주소값</th><th>장 르</th><th scope='row'>등록일자</th></tr>";
                          echo "<tr><td>$row[0] </td><td> $row[1] </td><td> $row[2] </td><td> $row[3] </td><td> $row[4] </td><td> $row[5] </td>";
                          echo "<td><input type='submit' value='delete' id='submitbutton'></td>";
                          echo "</form>";
                          echo "<form method='POST' action = './modify.html'>";
                          echo "<input type='hidden' name='key' value='$row[0]'>";
                          echo "<td><input type='submit' value='modify' id='submitbutton'/></td>";
                          echo "</form></tr></table><br>";
                          }
    }
    else
      echo "select page below <br>";

    ?>

