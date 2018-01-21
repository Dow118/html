<?php

include './admin_menu.html';

$menu = $_GET['menu'];

switch($menu){
    case 1:
    echo("<script>location.replace('./admin_insert.html');</script>");
    break;
    case 2:
    echo("<script>location.replace('./admin_modify.html');</script>");
    break;
    case 3:
    echo("<script>location.replace('./admin_delete.html');</script>");
    break;
}

?>
