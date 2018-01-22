    <?php

    include './admin_delete_page_head.html';

    $page = $_GET['page'];

    if($page>-1){
                        $db_host = "localhost";
                        $db_user = "root";
                        $db_pw = "111111";
                        $db_name = "tutorials";
                        $connect = mysqli_connect($db_host,$db_user,$db_pw,$db_name);
        
                        $page_num = $page*20;
                        $data_num = 20;
                        
                          
                         mysqli_query($connect, "set session character_set_connection=utf8;");
                         mysqli_query($connect, "set session character_set_results=utf8;");
                         mysqli_query($connect, "set session character_set_client=utf8;");
        
                        $result = mysqli_query($connect,"select * from info limit $page_num,$data_num");
        
                          while($row=mysqli_fetch_row($result)){
                          echo "<form method='POST' action = 'admin_delete_action.php'>";
                          echo "<input type='hidden' name='key' value='$row[0]'/>";
                          echo "$row[0] | $row[1] | $row[2] | $row[3] | $row[4] | $row[5] ";
                          echo "<input type='submit' value='delete' id='submitbutton'>";
                          echo "</form>";
                          echo "<form method='POST' action = 'admin_modify_action.php'>";
                          echo "<input type='hidden' name='key' value='$row[0]'>";
                          echo "<input type='submit' value='modify' id='submitbutton'/>";
                          echo "</form><br>";
                          }
    }
    else
      echo "select page below <br>";

    include './admin_delete_page_foot.html';
    ?>

