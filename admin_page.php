<?php

include './admin_login.php';

if($_POST["isPassword"]==$pass){
    echo("<script>location.replace('./admin.html');</script>"); 
  }
  else{
    echo("<script>location.replace('./index.html');</script>"); 
  }
?>
