<?php

$name = $_GET['name'];

switch($name){
    case 'insert':
    echo("<script>location.replace('./admin_insert.html');</script>");
    break;
    case 'modify':
    echo("<script>location.replace('./admin_modify.html');</script>");
    break;
    case 'delete':
    echo("<script>location.replace('./admin_delete.html');</script>");
    break;
}

?>
