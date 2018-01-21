<html>                        
  <head>
    <title> delete</title>
  </head>
  <body>
    <?
     include './admin_delete_connect.php';
    ?>
    <br>
    <br>
    <br>
    <a href="admin_delete.html?page=0"> 1 </a>
    <a href="admin_delete.html?page=1"> 2 </a>
    <a href="admin_delete.html?page=2"> 3 </a>
    <a href="admin_delete.html?page=3"> 4 </a>
    <a href="admin_delete.html?page=4"> 5 </a>
  </body>

</html>



                        <?php
                        $db_host = "localhost";
                        $db_user = "root";
                        $db_pw = "111111";
                        $db_name = "tutorials";
                        $connect = mysqli_connect($db_host,$db_user,$db_pw,$db_name);
                        $page_num = 0 + $_GET['page']*10;
                        $data_num = 20;
                        ?>
                <form method="POST" action = "admin_delete_action.php">
                        <?php
                        $result = mysqli_query($connect,"select * from info limit $start_num,$page_num");
                          while($row=mysqli_fetch_row($result)){
                          echo "<input type='hidden' name='key' value='$row[0]'/>";
                          echo "$row[0] | $row[1] | $row[2] | $row[3] | $row[4] | $row[5] ";
                          echo "<input type='submit' value='delete'/><br/>";
                          }
                        ?> 
                </form>
    <br><br>
