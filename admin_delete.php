
                        <?php
                        $db_host = "localhost";
                        $db_user = "root";
                        $db_pw = "111111";
                        $db_name = "tutorials";
                        $connect = mysqli_connect($db_host,$db_user,$db_pw,$db_name);
                        $start_num = 0;
                        $data_num = 20;

                        $query = "select * from info limit ".$start_num.",".$data_num;

                        $result = mysqli_query($connect,$query);
                          while($row=mysqli_fetch_row($result)){
                          echo "<form method='post' action='admin_delete_action.php'>;
                          
                          echo "$row[0] | $row[1] | $row[2] | $row[3] | $row[4] | $row[5] ";
                          echo "<input type='submit' value='delete'/>";
                          echo "</form><br/>";
                          }
                        ?>      