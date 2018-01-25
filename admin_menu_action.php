<?php

$menu = $_POST['menu'];

switch($menu){
    case 'insert':
    echo("<script>location.replace('./admin_menu_insert.html');</script>");
    break;
    case 'modify':
    echo("<script>location.replace('./admin_menu_manage.html');</script>");
    break;
}

?>
