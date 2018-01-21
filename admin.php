<?php

$menu = $_POST['menu'];

switch($menu){
    case 'insert':
    echo("<script>location.replace('./admin_insert.html');</script>");
    break;
    case 'modify':
    echo("<script>location.replace('./admin_modify.html');</script>");
    break;
    case 'delete':
    echo("<script>location.replace('./admin_delete.php');</script>");
    break;
}

?>
