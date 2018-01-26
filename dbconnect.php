
<?php

  $db_host = "localhost";
  $db_user = "root";
  $db_pw = "111111";
  $db_name = "tutorials";
  $connect = mysqli_connect($db_host,$db_user,$db_pw,$db_name);
    
  mysqli_query($connect, "set session character_set_connection=utf8;");
  mysqli_query($connect, "set session character_set_results=utf8;");
  mysqli_query($connect, "set session character_set_client=utf8;");

  if(!$connect) 
    echo "ERROR! : failed to CONNECT server";

?>
