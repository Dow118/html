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
                          echo "$row[0] | $row[1] | $row[2] | $row[3] | $row[4] | $row[5] ";
                          echo "<input type='submit' value='delete' id='submitbutton'>";
                          echo "</form>";
                          echo "<form method='POST' action = './modify.html'>";
                          echo "<input type='hidden' name='key' value='$row[0]'>";
                          echo "<input type='submit' value='modify' id='submitbutton'/>";
                          echo "</form><br>";
                          }
    }
    else
      echo "select page below <br>";

    ?>

